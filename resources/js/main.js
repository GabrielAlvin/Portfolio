// Meu Background de video
$('#myVideo').vide({
mp4: "videos/video.mp4"
}, {
    posterType: "mp4", 
    loop: "true", 
    muted: "false", 
    position: "0% 0%"
});

// Apresentação do sidebar
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    $("#icon-menu").toggleClass("fas fa-align-justify fas fa-align-center")
});

// Mudança de cor do buttão de menu
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('#menu-toggle').addClass("bg-danger")
    } else {
        $('#menu-toggle').removeClass("bg-danger")
    }
});

// Github API
$(function(){
    $(function(e){
        var requri   = 'https://api.github.com/users/GabrielAlvin';
        var repouri  = 'https://api.github.com/users/GabrielAlvin/repos';
      
        requestJSON(requri, function(json) {
            // Informações que eu quero pegar
            var username   = json.login;
            var aviurl     = json.avatar_url;
            var profileurl = json.html_url;
            var location = json.location;
            var followersnum = json.followers;
            var followingnum = json.following;
            var reposnum     = json.public_repos;
            
            var outhtml = '<div class="card text-white bg-danger bg-gradient mb-3 text-center shadow-xl"><div class="card-body">';
            outhtml = outhtml + '<a href="'+profileurl+'" target="_blank"><img id="img-git" src="'+aviurl+'" alt="'+profileurl+'" class="bd-placeholder-img rounded-circle" width="200" height="200"></a>';
            outhtml = outhtml + '<h5 class="card-title mt-2">@'+username+'</h5>';
            outhtml = outhtml + '<p class="card-text">'+location+'</p>';
            outhtml = outhtml + '<div class="justify-content-evenly d-flex"><p>Seguidores: '+followersnum+'</p><p>Seguindo: '+followingnum+'</p><p>Repositorios: '+reposnum+'</p></div>';
            outhtml = outhtml + '<button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#gitrespos" aria-controls="gitrespos">Visualizar meus Repositorios</button> </div>';

            var repositories;
            $.getJSON(repouri, function(json){
                repositories = json;   
                outputPageContent();                
            });          
          
            function outputPageContent() {
                if(repositories.length == 0) { 
                    outhtml = outhtml + '<div class="offcanvas offcanvas-end bg-danger bg-gradient" tabindex="-1" id="gitrespos" aria-labelledby="gitrespos"><div class="offcanvas-header"><h5 id="gitrespos" class="border-bottom mt-2">Meus Repositorios</h5><button type="button" class="btn-close text-reset btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button></div><div class="offcanvas-body"><ul class="nav flex-column text-center"><li class="nav-item mt-1">Não possui nenhum repositório</li></ul></div></div>'; 
                } else {
                    outhtml = outhtml + '<div class="offcanvas offcanvas-end bg-danger bg-gradient" tabindex="-1" id="gitrespos" aria-labelledby="gitrespos"><div class="offcanvas-header"><h5 id="gitrespos" class="border-bottom mt-2">Meus Repositorios</h5><button type="button" class="btn-close text-reset btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button></div><div class="offcanvas-body"><ul class="nav flex-column text-center">';
                    $.each(repositories, function(index) {
                        outhtml = outhtml + '<li class="nav-item m-1"><a href="'+repositories[index].html_url+'" class="btnn link-light border-link-center" target="_blank"><span class="tittle-span">'+repositories[index].name + ' <span class="badge bg-light text-dark">'+repositories[index].language+'</span> </span></a></li>';
                    });
                    outhtml = outhtml + '</ul></div></div>'; 
                }
                $('#profile').html(outhtml);
            }
        });
    });
    
    function requestJSON(url, callback) {
      $.ajax({
        url: url,
        complete: function(xhr) {
          callback.call(null, xhr.responseJSON);
        }
      });
    }
});