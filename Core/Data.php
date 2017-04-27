<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 27.04.2017
     * Time: 18:31
     */

    namespace Core;


    class Data
    {

        public static  $menu = [
    ['href' => 'insertletter', 'anchor' => 'Внесение ходатайства организации'],
    ['href' => 'header.php?page=insertOrder', 'anchor' =>'Внесение приказа Минэнерго'],
    ['href' => 'header.php?page=insertActs', 'anchor' => 'Внесение отчета об исполнении приказа'],
    ['href' => 'header.php?page=reportOrder', 'anchor' => 'Приказы Минэнерго'],
    ['href' => 'header.php?page=lettersworders_query', 'anchor' => 'Ходатайства по которым изданы приказы'],
    ['href' => 'header.php?page=letterswoorders_query', 'anchor' => 'Ходатайства по которым нет приказа'],
    ['href' => 'header.php?page=ordersworeports_query', 'anchor' => 'Неисполненные приказы'],
    ['href' => 'header.php?page=orderswreports_query', 'anchor' => 'Исполненные приказы']

    ];

        public static  $companylist = [

    'brestenergo' => 'Брестэнерго',
    'vitebskenergo'=> 'Витебскэнерго',
    'grodnoenergo' => 'Гродноэнерго',
    'gomelenergo' => 'Гомельэнерго',
    'minskenergo' => 'Минскэнерго',
    'mogilevenergo' => 'Могилевэнерго',
    'belenergostroy' => 'Белэнергострой',
    'beltei' => 'БелТЭИ',
    'belnipi' => 'Белнипиэнергопром',
    'belenergosetproekt' => 'Белэнергосетьпроект'

    ];

        public static $propertylist = [

    'vl110' => 'ВЛ110кВ',
    'vl35'=> 'ВЛ35кВ',
    'vl10'=> 'ВЛ10кВ',
    'vl6'=> 'ВЛ6кВ',
    'v04'=> 'ВЛ0,4кВ',
    'teploset'=> 'Тепловые сети',
    'building'=> 'Здание',
    'equipment'=> 'Оборудование'

    ];

       public static function menu(){

            foreach(static::$menu as $item){
                echo "<li><a href=\"{$item['href']}\">{$item['anchor']}</a></li>";
            }
        }

        /*
                /*
                отрисовка списка организаций
                */
       public static function complist() {

            foreach (static::$companylist as $comp_en=> $comp_rus) {
                echo "<option value = \"{$comp_en}\" > {$comp_rus}</option >";

            }
        }
        /*
         отрисовка перечня имущества
        */
        public static function proplist()
        {

            foreach (static::$propertylist as $prop_en => $prop_rus) {
                echo "<option value = \"{$prop_en}\" > {$prop_rus}</option >";

            }
        }
        /*
         отрисовка списка писем
        */
        public static function letters ($db) {

            $sql = 'SELECT letternum FROM Letters';
            $res=$db->query($sql);
            foreach ($res as $lnums){
                foreach ($lnums as $lnum){
                    echo "<option value = \"$lnum\" > {$lnum}</option >";
                }
            }

        }
        /*
         отрисовка списка приказов
        */
        public static function orders ($db)
        {

            $sql = 'SELECT ordersnum FROM Uniqueorders';
            $res=$db->query($sql);
            foreach ($res as $onums){
                foreach ($onums as $onum){
                    echo "<option value = \"$onum\" > {$onum}</option >";
                }
            }

        }


    }