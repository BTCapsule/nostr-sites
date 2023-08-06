const https = require('https');
const express = require('express');
const cors = require('cors');
const {
  relayInit,
  generatePrivateKey,
  getPublicKey,
  getEventHash
} = require('nostr-tools');
require('websocket-polyfill');
const converter = require('bech32-converting');

const app = express();

const evData = [];

const relay = relayInit('wss://relay.damus.io');

function connectRelay() {
  relay.on('connect', () => {
   

    https.get('https://nostrsites.com/note.txt', res => {
      let data = '';

      res.on('data', chunk => {
        data += chunk;
      });

      res.on('end', () => {
        const ids = data.split('\n').map(id => id.trim()).filter(id => id.length > 0);

        const convertedIDs = ids.map(id => {
          let noteID = converter('note').toHex(id);
					
          return noteID.substring(2).toLowerCase();
					
        });
				
				
        let sub = relay.sub([
          {
            ids: convertedIDs
          }
        ]);
        sub.on('event', event => {


          const note = converter('note').toBech32(event.id);

					const npub = converter('npub').toBech32(event.pubkey);
					
          const eventWithNoteID = {
            ...event,
            note,
						npub
          };

          const eventID = getEventHash(eventWithNoteID);

          if (!isDuplicateEvent(eventID)) {
            evData.push(eventWithNoteID);
          }
        });
      });
    });
  });

  relay.on('error', () => {
    console.log(`failed to connect to ${relay.url}`);
  });

  relay.connect().then(() => {

  });
}

function isDuplicateEvent(eventID) {
  for (const event of evData) {
    const existingEventID = getEventHash(event);
    if (eventID === existingEventID) {
      return true; 
    }
  }
  return false;
}

app.use(cors());


connectRelay();

setInterval(connectRelay, 10000);

app.get('/client', (req, res) => {
  if (evData.length > 0) {
    res.send(evData);
  } else {
    res.status(404).send('No data found.');
  }
});

const server = app.listen(8080, () => {
  console.log('Server listening on port 8080');
});
