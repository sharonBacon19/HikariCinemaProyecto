<?php

use Illuminate\Database\Seeder;

class PeliculaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #1
        $pelicula=new \App\Pelicula();
        $pelicula->nombre="Orgullo y prejuicio";
        $pelicula->estado=true;
        $pelicula->sinopsis="Las cinco hermanas Bennet han sido criadas por una madre obsesionada por encontrarles marido. Pero una de ellas, Lizzie, inteligente y con carácter, desea una vida con perspectivas más abiertas, un anhelo respaldado por su padre. Cuando el señor Bingley (Simon Woods), un soltero rico, y su círculo de sofisticados amigos se instalan en una mansión vecina para pasar el verano, las Bennett se entusiasman con la posibilidad de encontrar pretendientes. En el baile de bienvenida, Lizzie conoce al apuesto y elegante señor Darcy (Matthew Macfadyen), pero, a primera vista, le parece demasiado orgulloso y arrogante";
        $pelicula->imagen="https://cdn.slidesharecdn.com/ss_thumbnails/novelaorgulloyprejuicio-160609043542-thumbnail-4.jpg?cb=1465447457";
        $pelicula->gif="https://i.pinimg.com/originals/af/87/43/af8743734d00e23f897eb0210df5c87e.gif";
        $pelicula->clasificacionpelicula_id=3;
        $pelicula->save();
        #géneros
        $pelicula->genero()->attach([8, 12]);

        #2
        $pelicula=new \App\Pelicula();
        $pelicula->nombre="Your Name";
        $pelicula->estado=true;
        $pelicula->sinopsis="Mitsuha y Taki los protagonista de una historia de amor y fantasía. Mitsuha es una joven estudiante de un pueblo cuya familia es muy tradicional. Su padre postula a la alcaldía del pueblo. Sin embargo, Mitsuha anhela una vida en la ciudad y conocer al chico de sus sueños que encontrara en Tokio. Taki en cambio es un chico que vive en la ciudad, por su parte el también sueña con una chica de un pueblo que nunca antes el ha visto. ¿Cuál sera el misterio que une los sueños de ambos chicos?";
        $pelicula->imagen="https://www.cinemascomics.com/wp-content/uploads/2020/05/director-de-your-name-960x720.jpg";
        $pelicula->gif="https://i.pinimg.com/originals/31/75/a6/3175a69e239977a605df7e950d76baf9.gif";
        $pelicula->clasificacionpelicula_id=1;
        $pelicula->save();
        #géneros
        $pelicula->genero()->attach([3, 8, 9, 12]);

        #3
        $pelicula=new \App\Pelicula();
        $pelicula->nombre="Capitan America";
        $pelicula->estado=true;
        $pelicula->sinopsis="California USA, 1943: Steve Rogers, un joven con polio, se presenta como voluntario para un experimento militar que le convertirá en el primero de un ejército de super-soldados. Después de que la Dra. Vaselli quien dirigía este proyecto americano sea asesinada por un espía nazi, Steve Rogers adoptará la identidad del Capitán América y viajará a la Europa ocupada por el Eje. Ahí no solo deberá combatir a los nazis y sus nuevas armas secretas, sino que enfrentará al antiguo Tadzio De Santis, hoy convertido en un super-soldado fascista: se trata de su diabólica némesis, el agente nazi Craneo Rojo";
        $pelicula->imagen="https://es.web.img3.acsta.net/medias/nmedia/18/84/79/82/20099009.jpg";
        $pelicula->gif="https://i.pinimg.com/originals/95/25/9b/95259b2b8c9a449cb31e36a87606bde4.gif";
        $pelicula->clasificacionpelicula_id=1;
        $pelicula->save();
        #géneros
        $pelicula->genero()->attach([1, 3, 4, 5]);

        #4
        $pelicula=new \App\Pelicula();
        $pelicula->nombre="Ant-Man";
        $pelicula->estado=false;
        $pelicula->sinopsis="La próxima evolución en el Universo Cinematográfico Marvel traerá por primera vez a la pantalla grande a uno de los miembros fundadores de los Avengers con Ant-Man. Equipado con la sorprendente habilidad de encogerse en escala pero aumentar en fuerza, el ladrón experto Scott Lang deberá aceptar su héroe interno y ayudar a su mentor, el Dr. Hank Pym, a proteger el secreto de su espectacular traje de una nueva generación de peligros y amenazas. Enfrentando lo que parecen ser infranqueables obstáculos, Pym y Lang deberán planear la ejecución de un gran robó a fin se salvar al mundo";
        $pelicula->imagen="https://es.web.img2.acsta.net/pictures/15/05/11/10/11/517143.jpg";
        $pelicula->gif="https://thumbs.gfycat.com/NegativeRevolvingIzuthrush-max-14mb.gif";
        $pelicula->clasificacionpelicula_id=1;
        $pelicula->save();
        #géneros
        $pelicula->genero()->attach([1, 3, 4, 5, 8]);

        #5
        $pelicula=new \App\Pelicula();
        $pelicula->nombre="Rápidos y Furiosos 8";
        $pelicula->estado=false;
        $pelicula->sinopsis="Después de tantas aventuras y acción. Brian y Mia se retiran del juego y los demás del equipo buscan una vida tranquila y común. Pero algo inesperado sucede ya que se entera todo el grupo de que Dom esta trabajando para una misteriosa mujer. Todo el equipo deberá detener a Dom para evitar un desastre mundial, y asimismo saber el motivo de su traición. Te animamos a ver esta película llena de acción y suspenso";
        $pelicula->imagen="https://www.ecured.cu/images/d/d8/Furiosos.jpg";
        $pelicula->gif="https://www.nerdix.cl/wp-content/uploads/2017/04/Fastand1.gif";
        $pelicula->clasificacionpelicula_id=2;
        $pelicula->save();
        #géneros
        $pelicula->genero()->attach([1, 3, 4, 5, 6, 8, 12]);

        #6
        $pelicula=new \App\Pelicula();
        $pelicula->nombre="Pápidos y Furiosos 9";
        $pelicula->estado=false;
        $pelicula->sinopsis="Toretto tiene una vida tranquila fuera del radar, con Letty y su hijo, el pequeño Brian, pero saben que el peligro siempre acecha en su horizonte pacífico. Esta vez, esa amenaza obligará a Dom a confrontar los pecados de su pasado si va a salvar a los que más ama. Su equipo se une para detener una conspiración devastadora dirigida por el asesino más experimentado y el mejor conductor de alto rendimiento que jamás conocieron: un hombre que también es el hermano abandonado de Dom, Jakob";
        $pelicula->imagen="https://pbs.twimg.com/media/DfL8TnNW4AAmx9M.jpg";
        $pelicula->gif="https://josecardenas.com/wp-content/uploads/2019/01/tumblr_nmexbjwQRX1tg6e51o1_500.gif";
        $pelicula->clasificacionpelicula_id=2;
        $pelicula->save();
        #géneros
        $pelicula->genero()->attach([1, 3, 4, 5, 6, 8, 12]);

        #7
        $pelicula=new \App\Pelicula();
        $pelicula->nombre="Shrek 1";
        $pelicula->estado=true;
        $pelicula->sinopsis="Hace mucho tiempo, en una lejanísima ciénaga, vivía un feroz ogro llamado Shrek. ... Para salvar su territorio, Shrek hace un pacto con Farquaad y emprende viaje para conseguir que la bella princesa Fiona acceda a ser la novia del Lord";
        $pelicula->imagen="https://images-na.ssl-images-amazon.com/images/I/91qGwDbP8ML._SL1500_.jpg";
        $pelicula->gif="https://i.pinimg.com/originals/4c/de/34/4cde343aab1ca7799a19fa7afbefd81f.gif";
        $pelicula->clasificacionpelicula_id=4;
        $pelicula->save();
        #géneros
        $pelicula->genero()->attach([1, 3, 5, 8, 9, 14]);

        #8
        $pelicula=new \App\Pelicula();
        $pelicula->nombre="Shrek 2";
        $pelicula->estado=true;
        $pelicula->sinopsis="Cuando Shrek y la princesa Fiona regresan de su luna de miel, los padres de ella los invitan a visitar el reino de Muy Muy Lejano para celebrar la boda. Para Shrek, al que nunca abandona su fiel amigo Asno, esto constituye un gran problema. Los padres de Fiona, por su parte, no esperaban que su yerno tuviera un aspecto semejante y, mucho menos, que su hija hubiera cambiado tanto. Todo esto trastoca los planes del rey respecto al futuro del reino. Para entonces entran en escena la maquiavélica Hada Madrina, su arrogante hijo el Príncipe Encantador y un minino muy especial: el Gato con Botas, experto cazador de ogros";
        $pelicula->imagen="https://i.pinimg.com/originals/31/ef/db/31efdbe496f8abcff520191230575baa.jpg";
        $pelicula->gif="https://i.pinimg.com/originals/ed/52/95/ed5295cc72138321db808c4bb7905d83.gif";
        $pelicula->clasificacionpelicula_id=4;
        $pelicula->save();
        #géneros
        $pelicula->genero()->attach([1, 3, 5, 8, 9, 14]);
    }
}
