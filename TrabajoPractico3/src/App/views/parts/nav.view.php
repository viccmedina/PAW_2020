<!--Con este nav lo que hacemos es  refactorizar esa parte de codigo que todas las vistas tienen igual
para que si el dia de mañana hay que hacer un cambio en esta parte de la vista cambie para todos
sin tener que recorrer todas-->

<nav>
    <ul id="menu" open="">
        <?php foreach ($this->menu as $item) :?>

            <li name="<?= $item['name']?>"><a href="<?=$item['href']?>"><?= $item['name']?></a></li>
        <?php endforeach;?>
    </ul>
</nav>