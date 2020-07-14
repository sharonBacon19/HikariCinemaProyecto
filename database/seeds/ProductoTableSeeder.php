<?php

use Illuminate\Database\Seeder;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #1
        $producto=new \App\Producto();
        $producto->nombre="Palomitas de Mantequilla";
        $producto->estado=true;
        $producto->precio=1200;
        $producto->descripcion="Palomitas de maíz con sabor a mantequilla";
        $producto->imagen="https://previews.123rf.com/images/djungina/djungina1503/djungina150300002/37391772-una-caja-de-palomitas-de-ma%C3%ADz-con-mantequilla.jpg";
        $producto->tipoproducto_id=3;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([1, 2, 3]);

        #2
        $producto=new \App\Producto();
        $producto->nombre="Palomitas de Caramelo";
        $producto->estado=true;
        $producto->precio=1200;
        $producto->descripcion="Palomitas de maíz con sabor a caramelo";
        $producto->imagen="https://pimientadulce.com/wp-content/uploads/2017/07/IMG_5289.jpg";
        $producto->tipoproducto_id=3;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([1, 2, 3]);

        #3
        $producto=new \App\Producto();
        $producto->nombre="Palomitas de Naturales";
        $producto->estado=false;
        $producto->precio=1200;
        $producto->descripcion="Palomitas de maíz naturales";
        $producto->imagen="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAK1YXw.img?h=0&w=720&m=6&q=60&u=t&o=f&l=f";
        $producto->tipoproducto_id=3;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([1, 2, 3]);

        #4
        $producto=new \App\Producto();
        $producto->nombre="Coca-Cola";
        $producto->estado=true;
        $producto->precio=1000;
        $producto->descripcion="Bebida gaseosa";
        $producto->imagen="https://argentinisimo.es/wp-content/uploads/2019/02/Coca-Cola-lata-33cl.jpg";
        $producto->tipoproducto_id=1;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([1, 2, 3]);

        #5
        $producto=new \App\Producto();
        $producto->nombre="Fanta";
        $producto->estado=true;
        $producto->precio=1000;
        $producto->descripcion="Bebida gaseosa";
        $producto->imagen="https://www.chedraui.com.mx/medias/7501055303779-00-CH515Wx515H?context=bWFzdGVyfHJvb3R8NDM0OTV8aW1hZ2UvanBlZ3xoZTcvaGY2LzEwMTUwNjc1NjQ0NDQ2LmpwZ3wzODlhYTVkY2QzMzhkYjQ1OGI2ZGFhNWMzNjlhZDFiYmE3MTg1NWQ5NzdiYTk0MmQ3NjEwMWMxYzFkNjJlN2M1";
        $producto->tipoproducto_id=1;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([1, 2, 3]);


        #6
        $producto=new \App\Producto();
        $producto->nombre="Té frío de Limón";
        $producto->estado=false;
        $producto->precio=1000;
        $producto->descripcion="Té frío sabor limón";
        $producto->imagen="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTkf5OBhw70fjKqgabXy7V5PARJii5pBQFEsA&usqp=CAU";
        $producto->tipoproducto_id=1;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([1, 2, 3]);

        #7
        $producto=new \App\Producto();
        $producto->nombre="Té frío de Melocotón";
        $producto->estado=true;
        $producto->precio=1000;
        $producto->descripcion="Té frío sabor melocotón";
        $producto->imagen="https://cdn.shopify.com/s/files/1/1479/5948/products/Automercado-Bebidas-Te63_grande.png?v=1479493235";
        $producto->tipoproducto_id=1;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([1, 2, 3]);

        #8
        $producto=new \App\Producto();
        $producto->nombre="Pringles Originales";
        $producto->estado=true;
        $producto->precio=1050;
        $producto->descripcion="Papas sabor orginal";
        $producto->imagen="https://elpoderdelconsumidor.org/wp-content/uploads/2018/02/papas-pringles-original.jpg";
        $producto->tipoproducto_id=2;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([2, 3]);

        #9
        $producto=new \App\Producto();
        $producto->nombre="Pringles Cabolla";
        $producto->estado=true;
        $producto->precio=1050;
        $producto->descripcion="Papas sabor cebolla";
        $producto->imagen="https://tiendabtl.com/wp-content/uploads/2018/10/537384.png";
        $producto->tipoproducto_id=2;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([2, 3]);

        #10
        $producto=new \App\Producto();
        $producto->nombre="Papas fritas";
        $producto->estado=true;
        $producto->precio=1050;
        $producto->descripcion="Papas originales";
        $producto->imagen="https://images-gmi-pmc.edge-generalmills.com/476c10e1-c851-4539-8e3b-4b49323927c5.jpg";
        $producto->tipoproducto_id=2;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([2, 3]);

        #11
        $producto=new \App\Producto();
        $producto->nombre="Papas con tocino";
        $producto->estado=true;
        $producto->precio=1050;
        $producto->descripcion="Papas originales con tocino";
        $producto->imagen="https://cdn.kiwilimon.com/recetaimagen/15785/th5-640x426-7818.jpg";
        $producto->tipoproducto_id=2;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([2, 3]);

        #12
        $producto=new \App\Producto();
        $producto->nombre="Ruffles Barbacoa";
        $producto->estado=true;
        $producto->precio=1050;
        $producto->descripcion="Ruffles sabor barbacoa";
        $producto->imagen="https://i.ebayimg.com/thumbs/images/g/AjsAAOSwk5Fdk7sV/s-l225.jpg";
        $producto->tipoproducto_id=2;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([2, 3]);

        #13
        $producto=new \App\Producto();
        $producto->nombre="Snickers";
        $producto->estado=true;
        $producto->precio=800;
        $producto->descripcion="Chocolate con relleno";
        $producto->imagen="https://ecoosfera.com/wp-content/imagenes/Stephs-Snickers-Cake-Snickers-bar-1200x807.jpg";
        $producto->tipoproducto_id=4;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([2, 3]);

        #14
        $producto=new \App\Producto();
        $producto->nombre="Milka Mani";
        $producto->estado=true;
        $producto->precio=800;
        $producto->descripcion="Chocolate con mani";
        $producto->imagen="https://http2.mlstatic.com/milka-cacahuete-crujiente-de-chocolate-barra-de-caramelo-de-D_NQ_NP_805839-MLM28242478510_092018-F.jpg";
        $producto->tipoproducto_id=4;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([2, 3]);

        #15
        $producto=new \App\Producto();
        $producto->nombre="Milka Avellanas";
        $producto->estado=false;
        $producto->precio=800;
        $producto->descripcion="Chocoate con avellanas";
        $producto->imagen="https://www.alcampo.es/media/h34/h61/9591078420510.jpg";
        $producto->tipoproducto_id=4;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([2, 3]);

        #16
        $producto=new \App\Producto();
        $producto->nombre="Hot Dog Pavo";
        $producto->estado=true;
        $producto->precio=1500;
        $producto->descripcion="Hot Dog de pavo";
        $producto->imagen="https://static.wixstatic.com/media/378195_b9bb24a7980d41009232820b7946da92.png/v1/fill/w_500,h_333,al_c,q_90,usm_0.66_1.00_0.01/378195_b9bb24a7980d41009232820b7946da92.webp";
        $producto->tipoproducto_id=6;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([2]);

        #17
        $producto=new \App\Producto();
        $producto->nombre="Hot Dog Clasico";
        $producto->estado=true;
        $producto->precio=1500;
        $producto->descripcion="Hot Dog clásico";
        $producto->imagen="https://ichef.bbci.co.uk/news/976/cpsprodpb/3BAC/production/_107967251_mediaitem107967250.jpg";
        $producto->tipoproducto_id=6;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([2]);

        #18
        $producto=new \App\Producto();
        $producto->nombre="Hamburguesa de Res";
        $producto->estado=true;
        $producto->precio=1500;
        $producto->descripcion="Hamburguesa de Res";
        $producto->imagen="https://cdn.kiwilimon.com/recetaimagen/2890/12045.png";
        $producto->tipoproducto_id=6;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([1, 2, 3]);

        #19
        $producto=new \App\Producto();
        $producto->nombre="Hamburguesa de Pollo";
        $producto->estado=true;
        $producto->precio=1500;
        $producto->descripcion="Hamburguesa de Pollo";
        $producto->imagen="https://cdn.kiwilimon.com/recetaimagen/13823/6183.jpg";
        $producto->tipoproducto_id=6;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([1, 2, 3]);

        #20
        $producto=new \App\Producto();
        $producto->nombre="Hamburguesa de Pescado";
        $producto->estado=false;
        $producto->precio=1500;
        $producto->descripcion="Hamburguesa de Pescado";
        $producto->imagen="https://www.pequerecetas.com/wp-content/uploads/2011/07/Hamburguesa-de-pescado-480x723.jpg";
        $producto->tipoproducto_id=6;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([1, 2, 3]);

        #21
        $producto=new \App\Producto();
        $producto->nombre="Lay's Clásicas";
        $producto->estado=false;
        $producto->precio=1500;
        $producto->descripcion="Papas clásicas";
        $producto->imagen="https://cdn11.bigcommerce.com/s-3stx4pub31/images/stencil/1280x1280/products/1344/3666/lays__71941.1588794412.png?c=2?imbypass=on";
        $producto->tipoproducto_id=6;
        $producto->save();
        #clasificación
        $producto->clasificacion()->attach([1, 2, 3]);
    }
}
