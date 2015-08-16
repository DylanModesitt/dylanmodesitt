$(document).ready(function(){
    
    function fbshareCurrentPage(){
            window.open("https://www.facebook.com/sharer/sharer.php?u="+escape(window.location.href)+"&t="+document.title, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false; 
        }
    function emailCurrentPage(){
            window.location.href="mailto:?subject="+document.title+"&body="+escape(window.location.href);
        }
     function tweetCurrentPage() {
            window.open("https://twitter.com/share?url="+escape(window.location.href)+"&text="+document.title, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;  
        }

});