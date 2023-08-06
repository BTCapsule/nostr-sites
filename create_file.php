<?php
$filename = "note.txt"; 
$filename2 = ""; 

if(isset($_POST["note"])) {
	$note = $_POST["note"]; 

	
	$file = fopen($filename, "a"); 
	fwrite($file, $note . "\n"); 
	fclose($file); 

	
	$filename2 = $note . ".html";
	$file2 = fopen($filename2, "w");
	fwrite($file2, "
		
		
		<script>
	document.addEventListener('DOMContentLoaded', () => {
  fetch('https://nostrsites.com/client/')
    .then(response => response.json())
    .then(data => {
      
      const currentURL = window.location.href;
      const urlTag = currentURL.split('.com/')[1].replace('.html', '');

      data.forEach(item => {
        const content = item.content;
        const noteTag = item.note;

        
        if (noteTag === urlTag) {
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

	
</script>"); 
	fclose($file2); 

	echo "THANK YOU! \n\nTHE PAGE WILL REFRESH WITH YOUR NEW SITE IN ABOUT 10 SECONDS";
	

}

if ($filename2 != "") {
	header("Refresh: 10; URL=$filename2"); 
	exit;
}

$url = htmlspecialchars($_SERVER['HTTP_REFERER']);

?>
