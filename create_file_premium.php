
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$filename = "urls.txt"; 
$filename2 = ""; 


if (isset($_POST["npub"]) && isset($_POST["title"]) && isset($_POST["note"])) {
    $npub = $_POST["npub"]; 
		
    $title = $_POST["title"]; 
		$note = $_POST["note"];
    
    $file = fopen($filename, "a"); 
    fwrite($file, $title . PHP_EOL . $npub . PHP_EOL); 
    fclose($file); 
		
    $filename2 = $title . ".html";

    $file2 = fopen($filename2, "w"); 
		
    if (isset($_POST["jqueryCheckbox"])) {
        fwrite($file2, "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js'></script>\n");
    }

    if (isset($_POST["phaserCheckbox"])) {
        fwrite($file2, "<script src='https://cdn.jsdelivr.net/npm/phaser@3.60.0/dist/phaser.min.js'></script>\n");
        fwrite($file2, "<script src='//cdn.jsdelivr.net/npm/phaser-matter-collision-plugin'></script>\n");
    }
		
    if (isset($_POST["reactCheckbox"])) {
        fwrite($file2, "<script crossorigin src='https://unpkg.com/react@18/umd/react.production.min.js'></script>
				<script crossorigin src='https://unpkg.com/react-dom@18/umd/react-dom.production.min.js'></script>\n");
			}	
			
			
    if (isset($_POST["bootstrapCheckbox"])) {
        fwrite($file2, "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>\n");
				fwrite($file2, "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js' integrity='sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V' crossorigin='anonymous'></script>\n");
    }
		
			
		
			

if (isset($_POST["regNote"])) {
    fwrite($file2, "<script src='https://unpkg.com/nostr-tools/lib/nostr.bundle.js'></script>

<style>



  body {
		 font-family: 'Helvetica';
		 
  }

nav {
	
	position: relative;
	
    width: 100%;
    
		margin-right: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
	
	margin-bottom: -400px;
	

	
	
}

#top {
	margin-top: 30px;
	font-size: 34px;;
}

#switch {
	margin-left: 10px;
	color:black;
	
}


#zapper
{
	
  margin-right: 10px;
  float: right;
	text-decoration: none;
	height: 50px;
  
}

	
#nostr-zap-target {
	
	background-color: white;
	font-size: 38px;
	font-family: 'Courier New';
	font-weight: bold;
	color: black;
}	





#zapper2 button
{
	
  margin-bottom: 250px;
  float: center;
	text-decoration: none;
	
	background-color: black;
	color:white;
	height:80px;
	border-radius: 20px;
  
}	
	
	
#nostr-zap-target2 {
	
	
	font-size: 38px;
	font-family: 'Courier New';
	font-weight: bold;
float:center;
}	

#text {
		 max-width: 90%;
    overflow: auto;
    border: 1px solid white;
    padding: 50px;
    white-space: pre-wrap;
    word-wrap: break-word;
    font-size: 46px;
    line-height: 60pt;
		margin-top: 100px;
		text-align: center;
		margin-bottom: -50px;
}
	
#render {
	/*margin-bottom: -500px;*/
	
	    max-width: 90%;
    overflow: auto;
    border: 1px solid white;
    padding: 50px;
    white-space: pre-wrap;
    word-wrap: break-word;
    font-size: 46px;
    line-height: 50pt;
		margin-top: 10px;
}
	
	
 a {
    max-width: 500px;
    color: purple;
    font-weight: bold;
  }

	

  img {
    max-width: 90%;
    text-align: center;
		margin-left: auto;
		border-radius: 50px;
  }

  h1 {
    margin-bottom: -20px;
    margin-top: -10px;
    font-size: 56px;
		font-weight: bold;
  }

	h2, h3 {
    font-size: 63px;
    font-weight: normal;
    margin-bottom: -20px;
    margin-top: -10px;
  }

  strong {
    font-weight: bold;
    color: purple;
  }
	
	
	#center {
		
		text-align: center;
		margin-top: 50px;
		margin-bottom: 70px;
	}


.nostrEmbedCard{
margin-top: 50px;	
	border-color: red;
	min-width: 700px;
	
}


	.cardContent {
		
		font-size: 70px;
		color:black;
		
	}


.cardContentImage {
	
	min-width: 700px;
}	
	
hr {
  
  border-color: white;
}
	
.cardMeta {
  visibility: hidden;
}


.profileName  {
	margin-top: 50px;
	
}

.profileName a {
	margin-top: 50px;
	font-size: 40px;
}

.profileImg {
	margin-left: 10px;
	min-width: 100px;
	min-height: 100px;
}

.displayText  {
	color: white;
}

	.profilePkey{
		visibility: hidden;
		margin-top: -20px;
	}
	
.cardInteractions {
  visibility: hidden;
	max-height: 10px;
}

.interactionContainer {
  visibility: hidden;
}

</style>



<div id='render'></div>


        <script>
  let contents='';
let noteTag='';	document.addEventListener('DOMContentLoaded', () => {
            fetch('https://nostrsites.com/client/')
            .then(response => response.json())
            .then(data => {
							
                data.forEach(item => {
                     contents = item.content;
                     noteTag = item.note;

                    
                     if (noteTag === '".addslashes($note)."'){
                        console.log('Matching note tag:', noteTag);
												
                        const scriptTags = contents.match(/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi);

                        

                            
                            setTimeout(() => {
                                scriptTags.forEach(scriptTag => {
                                    const scriptCode = scriptTag.replace(/<\/?script[^>]*>/gi, '').trim();

                                    
                                    const newScript = document.createElement('script');
                                    newScript.textContent = scriptCode;

                                    
                                    document.body.appendChild(newScript);
                                });
															}, 100); 
   

	function launchClient(link) {
		
			
		
  window.location.href = 'https://snort.social/' + link;
  

}
								
															

function convertMarkdownToHTML(html) {
  
  	html = html.replace(/### (.+)/g, '<h3>$1</h3>');
	html = html.replace(/## (.+)/g, '<h2>$1</h2>');
  html = html.replace(/# (.+)/g, '<h1>$1</h1>');
  
  

  
  html = html.replace(/\^(.+)/g, '<sub><sup>$1</sup></sub>');

  html = html.replace(/\=\=(.+?)\=\=/g, '<mark>$1</mark>');
  
  html = html.replace(/\*\*(.+?)\*\*/g, '<strong>$1</strong>');

  
  html = html.replace(/\*(.+?)\*/g, '<em>$1</em>');

  
  html = html.replace(/`(.+?)`/g, '<code>$1</code>');
	
	


	

html = html.replace(/\[(.+?)\]\((.+?)\)/g, '<a href=\"\$2\">\$1</a>');


 


			
	

  
  html = html.replace(/^\s*- (.+)/gm, '<ul><li>$1</li></ul>');


  html = html.replace(/\\n/g, '<br>');

	
	
	


  return html;
}





let cachedProfileMetadata = {};

const getProfileMetadata = async (authorId) => {
  if (cachedProfileMetadata[authorId]) {
    return cachedProfileMetadata[authorId];
  }

  const metadata = await new Promise((resolve, reject) => {
    const relay = window.NostrTools.relayInit('wss://relay.nostr.band');

    relay.on('connect', async () => {
      console.log(`connected to \${relay.url}`);

      try {
        const fetchedMetadata = await relay.get({
          authors: [authorId],
          kinds: [0],
        });

        cachedProfileMetadata[authorId] = fetchedMetadata;
        resolve(fetchedMetadata);
      } catch (error) {
        reject(`Failed to fetch user profile: \${error}`);
      } finally {
        relay.close();
				console.log('relay closed')
      }
    });

    relay.on('error', (error) => {
      reject(`Failed to connect to \${relay.url}: \${error}`);
      relay.close();
    });

    relay.connect();
  });

  if (!metadata) {
    throw new Error('Failed to fetch user profile :(');
  }

  return metadata;
};

const extractProfileMetadataContent = (profileMetadata) => {
  return JSON.parse(profileMetadata.content);
}
const getUsernameFromHexKey = async (hexKey) => {
  try {
    const metadata = await getProfileMetadata(hexKey);
    const profileContent = extractProfileMetadataContent(metadata);
		
    const username = profileContent.name;
    return username;
  } catch (error) {
    console.error('Error:', error.message);
    throw error;
  }
};


    const contentContainer = document.getElementById('render');

  let html = convertMarkdownToHTML(contents);		
		



	
	
	
	
	
	
	
const paragraphs = html.split('<br>');


const imgvid = contents.match(/\b(https?:\/\/\S+\.(?:webp|png|jpg|jpeg|gif|mov|mp4))\b/gi);

const youtubeUrls = html.match(/(https?:\/\/youtu\.be\/\S+)/gi);





function onlyOne(){
const processedParagraphs = paragraphs.map((paragraph) => {
  
  const processedParagraph = paragraph.replace(/(https?:\/\/\S+\.(?!(?:webp|png|jpg|jpeg|gif|mov|mp4)$)[^.\s]+)\s*/g, '<a href=\"\$1\">\$1</a> ');

  return processedParagraph.trim();
});


html = processedParagraphs.join('<br>');







console.log(imgvid);

if (imgvid && !youtubeUrls) {
  imgvid.forEach((match) => {
    const extension = match.substring(match.lastIndexOf('.') + 1).toLowerCase();

    if (['png', 'jpg', 'jpeg', 'gif', 'webp'].includes(extension)) {
      const img = `<div id='center'><img src='\${match}'></div>`;
      html = html.replace(new RegExp(match.replace(/[.*+\-?^\${}()]/g, '\$&'), 'g'), img);
    } else if (['mov', 'mp4'].includes(extension)) {
      const vid = `<br><br><div id='center'><video width='400' height='800' controls><source src='\${match}#t=0.1' type='video/mp4'><source src='\${match}' type='video/ogg'></video></div>`;
       html = html.replace(new RegExp(match.replace(/[.*+\-?^\${}()]/g, '\$&'), 'g'), vid);
    }
  });
}


const wrapYouTubeUrls = (html) => {
  

  if (youtubeUrls && !imgvid) {
    youtubeUrls.forEach((url) => {
      const youtubeId = url.slice(17);

      if (youtubeId) {
        const youtubeEmbed = `<div id='center'><iframe width='840' height='472' src='https://www.youtube.com/embed/\${youtubeId}' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe></div>`;
        html = html.replace(url, youtubeEmbed);
      }
    });
  }

  return html;
};


html = wrapYouTubeUrls(html);



const removeAnchorTagsWithImages = (html) => {
  const anchorTags = html.match(/<a\s+(?:[^>]*?\s+)?href=([\"'])(.*?)\\1[^>]*>.*?<\/a>/gi);

  if (anchorTags) {
    anchorTags.forEach((anchorTag) => {
      if (/<img\s+.*?>/i.test(anchorTag) || /<video\s+.*?>/i.test(anchorTag) || /<iframe\s+.*?>/i.test(anchorTag)) {
        html = html.replace(anchorTag, anchorTag.match(/<a\s+(?:[^>]*?\s+)?href=([\"'])(.*?)\\1/i)[2]);
      }
    });
  }

  return html;
};


html = removeAnchorTagsWithImages(html);

}






function both(){
	
	console.log('both')
	
const processHtml = (html) => {
  

  const processedParagraphs = paragraphs.map((paragraph) => {
    const processedParagraph = paragraph.replace(/(https?:\/\/\S+\.[^.\s]+)\s*/g, '<a href=\"\$1\">\$1</a>');
    return processedParagraph.trim();
  });

  html = processedParagraphs.join('<br>');
	

  html = processedParagraphs.join('<br>');

 

	
const wrapYouTubeUrls = (html) => {
    const parser = new DOMParser();
    const doc = parser.parseFromString(html, 'text/html');

    const youtubeLinks = doc.querySelectorAll('a[href^=\"https://youtu.be/\"]');

    youtubeLinks.forEach((link) => {
      const youtubeId = link.href.split('/').pop();
			

      if (youtubeId) {
        const youtubeEmbed = `<div id='center'><iframe width='840' height='472' src='https://www.youtube.com/embed/\${youtubeId}' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe></div>`;
       
				
link.outerHTML = youtubeEmbed;
     
           }
    });

    return doc.documentElement.innerHTML;
  };

  
	
html = wrapYouTubeUrls(html);	
	
	
	
	
	
	
  const imgvidNew = contents.match(/\b(https?:\/\/\S+\.(?:webp|png|jpg|jpeg|gif|mov|mp4))\b/g);	
	
	
	
 
		
		
		
    imgvidNew.forEach((match) => {
      const extension = match.substring(match.lastIndexOf('.') + 1).toLowerCase();

      if (['png', 'jpg', 'jpeg', 'gif', 'webp'].includes(extension)) {
        const img = `<div id='center'><img src='\${match}'></div>`;
			
       html = html.replace(new RegExp(match.replace(/[.*+\-?^\${}()]/g, '\\$&'), 'g'), img);
			
      } else if (['mov', 'mp4'].includes(extension)) {
        const vid = `<br><br><div id='center'><video width='400' height='800' controls><source src='\${match}#t=0.1' type='video/mp4'><source src='\${match}' type='video/ogg'></video></div>`;
        html = html.replace(new RegExp(match.replace(/[.*+\-?^\${}()]/g, '\\$&'), 'g'), vid);
      }
    });
		return html


	
			
	
	
	
	
	
  const removeAnchorTagsWithImages = (html) => {
    const anchorTags = html.match(/<a\s+(?:[^>]*?\s+)?href=([\"'])(.*?)\\1[^>]*>.*?<\/a>/gi);

    if (anchorTags) {
      anchorTags.forEach((anchorTag) => {
        if (/<img\s+.*?>/i.test(anchorTag) || /<video\s+.*?>/i.test(anchorTag) || /<iframe\s+.*?>/i.test(anchorTag)) {
          html = html.replace(anchorTag, anchorTag.match(/<a\s+(?:[^>]*?\s+)?href=([\"'])(.*?)\\1/i)[2]);
        }
      });
    }

    return html;
  };

  html = removeAnchorTagsWithImages(html);

  return html;
};



html = processHtml(html)


console.log(html)


}














if ((imgvid && !youtubeUrls) || (youtubeUrls && !imgvid)){
	
	onlyOne()
} else if (imgvid && youtubeUrls){
	both()
}


	
	
	
	
	
	
	
	
	





	





  
  const matches = contents.match(/nostr:([^\s]+)/g);

  
  if (matches) {
    matches.forEach((match, index) => {
			
      
      const extractedString = match.substring(6);
      

      let decodedString;
			let newNote;






async function processString() {
  
if (extractedString.startsWith('npub')) {
  
  const punctuation = extractedString.match(/[^\w\s]/g); 
  const content = extractedString.replace(/[^\w\s]/g, ''); 

  const decodedString = JSON.stringify(window.NostrTools.nip19.decode(content));
  const parsedDecodedString = JSON.parse(decodedString);
  const dataTag = parsedDecodedString.data;
  console.log(dataTag + ' decode');

  const divId = `some-container-name-\${index}`;

  
  const divElement = document.createElement('div');
  divElement.id = divId;
	divElement.style.display = 'inline-block'
  const linkElement = document.createElement('a');
  linkElement.href = '#';
  linkElement.onclick = () => launchClient(content);
  linkElement.textContent = '';

  divElement.appendChild(linkElement);

  

  html = html.replace(match, divElement.outerHTML);

  let name;
  try {
    name = await getUsernameFromHexKey(dataTag);
    updateLinkElement(name);
  } catch (error) {
    console.error('Error:', error.message);
  }
  console.log(name + ' name');

  function updateLinkElement(name) {
    const render = document.querySelector(`#\${divId}`);
    const existingLinkElement = render.querySelector('a');
		existingLinkElement.href = '#';
		existingLinkElement.onclick = () => launchClient(content);
    existingLinkElement.textContent = name;
  }
}


	else if (extractedString.startsWith('note')) {
    
    decodedString = window.NostrTools.nip19.decode(extractedString);
    newNote = decodedString.data;

    
    const divId = `some-container-id-\${index}`;

    
    const divElement = document.createElement('div');
    divElement.id = divId;

    const scriptCode = `
      setTimeout(function() {
        const n = document.createElement('script');
        n.type = 'text/javascript';
        n.async = true;
        n.src = 'https://cdn.jsdelivr.net/gh/nostrband/nostr-embed@latest/dist/nostr-embed.js';
        n.onload = function () {
          nostrEmbed.init(
            '\${newNote}',
            '#\${divId}', 
            'wss://relay.damus.io'
          );
        };
        const a = document.getElementsByTagName('script')[0];
        a.parentNode.insertBefore(n, a);
      }, \${index * 200}); 
    `;

    
    const scriptElement = document.createElement('script');
    scriptElement.text = scriptCode;

    
    document.body.appendChild(divElement);
    document.body.appendChild(scriptElement);

    
    html = html.replace(match, divElement.outerHTML);
  }
}

processString();






})
}


	
	
	
	

	
	
	
	


const contentElement = document.createElement('div');



	
    contentElement.innerHTML = `\${convertMarkdownToHTML(html)}`;
  
	
	contentContainer.appendChild(contentElement);		
	
	
												}
                    
                });
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
        </script>");
	} else {			
			

    
    fwrite($file2, "
        <script>
        document.addEventListener('DOMContentLoaded', () => {
            fetch('https://nostrsites.com/client/')
            .then(response => response.json())
            .then(data => {
							
                data.forEach(item => {
                    const content = item.content;
                    const noteTag = item.note;

                    
                     if (noteTag === '".addslashes($note)."') {
                        console.log('Matching note tag:', noteTag);
                        console.log('Content:', content);

                        
                        const scriptTags = content.match(/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi);

                        if (scriptTags) {
                            
                            const div = document.createElement('div');
                            div.innerHTML = content;

                            
                            document.body.appendChild(div);

                            
                            setTimeout(() => {
                                scriptTags.forEach(scriptTag => {
                                    const scriptCode = scriptTag.replace(/<\/?script[^>]*>/gi, '').trim();

																		const newScript = document.createElement('script');
                                    newScript.textContent = scriptCode;

                                    
                                    document.body.appendChild(newScript);
                                });
                            }, 100); 
                        } else {
                            
                            const div = document.createElement('div');
                            div.innerHTML = content;

                            
                            document.body.appendChild(div);
                        }
                    }
                });
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
        </script>
					");

}				


 
	fclose($file2); 

	echo "THANK YOU! \n\nTHE PAGE WILL REFRESH WITH YOUR NEW SITE IN ABOUT 10 SECONDS";
	

}


$url = htmlspecialchars($_SERVER['HTTP_REFERER']);

?>
