var experienc=document.getElementById('social-media');
var body=document.getElementById('body');
var home=document.getElementById('home');
var request = new XMLHttpRequest()

request.open('GET', 'http://api.github.com/users/AlbinSmajli22/repos', true)


request.onload=function(){
    var data = JSON.parse(this.response);
    
    console.log(data);

    var statusHTML = '';
    $.each(data, function(i, status) {
      statusHTML += '<div class="repos">';
      statusHTML += '<h3>'+ status.name + '</h3>';
      statusHTML += '<div id="line"></div>';
      statusHTML += '<a target="_blank" href="'+status.html_url+'">L. You can go to the repository by clicking here.</a>';
      statusHTML += '<p>T. ' + status.language + '</p>';
      statusHTML +='<p> D. '+ status.created_at + '</p>';
      statusHTML += '</div>';
      });
      $('#repo').html(statusHTML);
}

request.send();


