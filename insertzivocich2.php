<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "planeta";
$table = "zivocich2";
$i = 0;

// Vytvorime spojeni s databazi
$conn = new mysqli($servername, $username, $password, $database);

// Overime spojeni
if ($conn->connect_error) {
    die("Spojeni selhalo: " . $conn->connect_error);
}
echo "Spojeni bylo uspesne \r\n";

$sql[0] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Zmije levantská','Macrovipera lebetina','plaz','had',FALSE,'Asie',TRUE);";
$sql[1] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Zmije menší','Vipera ursinii','plaz','had',FALSE,'Asie',FALSE);";
$sql[2] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Zmije menší - rákošská','Vipera ursinii','plaz','had',FALSE,'Evropa',FALSE);";
$sql[3] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Zmije nosorohá','Bitis nasicornis','plaz','had',FALSE,'Evropa',FALSE);";
$sql[4] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Zmije obecná','Vipera berus','plaz','had',FALSE,'Evropa',FALSE);";
$sql[5] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Papoušek modrohřbetý','Forpus xanthopterygius','pták','',FALSE,'Amerika',TRUE);";
$sql[6] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Papoušek nádherný','Polytelis swainsonii','pták','',FALSE,'Amerika',FALSE);";
$sql[7] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Papoušek niamský','Poicephalus crassus','pták','',FALSE,'Amerika',FALSE);";
$sql[8] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Papoušek noční','Geopsittacus occidentalis','pták','',FALSE,'Amerika',FALSE);";
$sql[9] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Papoušek patagonský','Cyanoliseus patagonus','pták','',FALSE,'Afrika',FALSE);";
$sql[10] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Papoušek překrásný','Psephotus pulcherrimus','pták','',FALSE,'Afrika',FALSE);";
$sql[11] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Pes horský','Lycalopex culpaeus','savec','pes',TRUE,'Evropa',FALSE);";
$sql[12] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Pes hřívnatý','Chrysocyon brachyurus','savec','pes',TRUE,'Evropa',FALSE);";
$sql[13] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Pes hyenový','Lycaon pictus','savec','pes',TRUE,'Evropa',FALSE);";
$sql[14] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Pes krátkouchý','Atelocynus microtis','savec','pes',TRUE,'Evropa',FALSE);";
$sql[15] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Pes pralesní','Speothos venaticus','savec','pes',TRUE,'Evropa',TRUE);";
$sql[16] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Pes ušatý','Otocyon megalotis','savec','pes',,'Evropa',FALSE);";
$sql[17] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Holoubek diamantový','Geopelia cuneata','pták','',FALSE,'Evropa',FALSE);";
$sql[18] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Husa krátkozobá','Anser brachyrhynchus','pták','',FALSE,'Evropa',FALSE);";
$sql[19] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Husa landeská','Anser anser f. domesticus','pták','',FALSE,'Evropa',FALSE);";
$sql[20] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Husa lippská','Anser anser f. domesticus','pták','',FALSE,'Evropa',FALSE);";
$sql[21] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Husa malá','Anser erythropus','pták','',FALSE,'Evropa',FALSE);";
$sql[22] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Samojed','Samoyede','savec','pes',FALSE,'Evropa',TRUE);";
$sql[23] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Saranče horská','Miramella alpina','hmyz','',FALSE,'Afrika',FALSE);";
$sql[24] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Saranče lesklá','Chrysochraon dispar','hmyz','',FALSE,'Afrika',FALSE);";
$sql[25] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Siamská kočka','Siamese Cat','savec','kočka',FALSE,'Evropa',FALSE);";
$sql[26] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Sibiřský husky','Siberian Husky','savec','pes',FALSE,'Evropa',FALSE);";
$sql[27] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Datel černý','Dryocopus martius','ptak','',FALSE,'Evropa',FALSE);";
$sql[28] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Datel hnědý','Celeus elegans','ptak','',FALSE,'Evropa',FALSE);";
$sql[29] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Sifaka malý','Propithecus verreauxi','','',FALSE,'Amerika',FALSE);";
$sql[30] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Afghánský chrt','Afghan Hound','savec','pes',FALSE,'Asie',FALSE);";
$sql[31] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Bažant Elliotův','Syrmaticus ellioti','ptak','',FALSE,'Evropa',FALSE);";
$sql[32] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Bažant královský','Syrmaticus reevesii','ptak','',FALSE,'Evropa',FALSE);";
$sql[33] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Bažant obecný','Phasianus colchicus','ptak','',FALSE,'Evropa',FALSE);";
$sql[32] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Chameleon obrovský','Furcifer oustaleti','plaz','',FALSE,'Afrika',FALSE);";
$sql[33] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Chameleon pardálí','Furcifer pardalis','plaz','',FALSE,'Afrika',FALSE);";
$sql[34] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Emu hnědý','Dromaius novaehollandiae','ptak','',FALSE,'Austrálie',FALSE);";
$sql[35] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Foxteriér hladkosrstý','Fox Terrier Smooth','','pes',TRUE,'Evropa',FALSE);";
$sql[36] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Gekon lemovaný','','plaz','jester',FALSE,'Evropa',FALSE);";
$sql[37] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Gekon madagaskarský','Paroedura pictus','plaz','jester',FALSE,'Austrálie',TRUE);";
$sql[38] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Gekon obrovský','Gekko gecko','plaz','jester',FALSE,'Austrálie',FALSE);";
$sql[39] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Gekon saharský','Stenodactylus petrii','plaz','jester',FALSE,'Afrika',FALSE);";
$sql[40] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Gekon Steudnerův','Chondrodactylus turneri','plaz','jester',FALSE,'Evropa',FALSE);";
$sql[41] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Holub Arabský bublák','','ptak','',FALSE,'Evropa',FALSE);";
$sql[42] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Holub Bavorský voláč','','ptak','',FALSE,'Evropa',FALSE);";
$sql[43] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Holub Berlínský dlouhozobý rejdič','','ptak','',FALSE,'Evropa',FALSE);";
$sql[44] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Holub Berlínský krátkozobý rejdič','','ptak','',FALSE,'Evropa',FALSE);";
$sql[45] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Holub Berlínský rousný rejdič','','ptak','',FALSE,'Evropa',FALSE);";
$sql[46] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Kachna kampbelka','','ptak','',FALSE,'Asie',FALSE);";
$sql[47] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Kachna orpingtonská','','ptak','',FALSE,'Asie',FALSE);";
$sql[48] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Kachna overberžská','','ptak','',FALSE,'Asie',FALSE);";
$sql[49] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Kachna pekingská','','ptak','',FALSE,'Asie',FALSE);";
$sql[50] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Kachna pižmová','Cairina moschata f. dom.','ptak','',FALSE,'Asie',TRUE);";
$sql[51] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Kachna pomořanská','','ptak','',FALSE,'Evropa',FALSE);";
$sql[52] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Kachna rouenská','Caneton rouennais','ptak','',FALSE,'Evropa',FALSE);";
$sql[53] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Racek bouřní','Larus canus','ptak','',FALSE,'Evropa',FALSE);";
$sql[54] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Racek černohlavý','Ichthyaetus melanocephalus','ptak','',FALSE,'Evropa',FALSE);";
$sql[55] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Racek chechtavý','Chroicocephalus ridibundus','ptak','',FALSE,'Evropa',FALSE);";
$sql[56] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Racek malý','Hydrocoloeus minutus','ptak','',FALSE,'Evropa',FALSE);";
$sql[57] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Racek mořský','Larus marinus','ptak','',FALSE,'Evropa',FALSE);";
$sql[58] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Racek stříbřitý','Larus argentatus','ptak','',FALSE,'Antarktida',FALSE);";
$sql[59] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Racek šedý','Larus hyperboreus','ptak','',FALSE,'Amerika',FALSE);";
$sql[60] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Serval','Leptailurus serval','','',FALSE,'',FALSE);";
$sql[61] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Užovka hladká','Coronella austriaca','plaz','had',FALSE,'Evropa',FALSE);";
$sql[62] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Užovka chřestýší','Nerodia taxispilota','plaz','had',FALSE,'Evropa',FALSE);";
$sql[63] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Užovka levhartí','Elaphe situla','plaz','had',FALSE,'Evropa',FALSE);";
$sql[64] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Užovka maurská','Natrix maura','plaz','had',FALSE,'Evropa',FALSE);";
$sql[65] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Užovka obojková','Natrix natrix','plaz','had',FALSE,'Evropa',FALSE);";
$sql[66] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Užovka ostronosá','Gonyosoma oxycephala','plaz','had',FALSE,'Evropa',FALSE);";
$sql[67] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Užovka páskovaná','Nerodia fasciata','plaz','had',FALSE,'Evropa',FALSE);";
$sql[68] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Užovka podplamatá','Natrix tessellata','plaz','had',FALSE,'Evropa',FALSE);";
$sql[69] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Varan drsnokrký','Varanus rudicollis','plaz','jester',FALSE,'Austrálie',FALSE);";
$sql[70] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Varan Mertensův','Varanus mertensi','plaz','jester',FALSE,'Austrálie',FALSE);";
$sql[71] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Varan nilský','Varanus niloticus','plaz','jester',FALSE,'Afrika',FALSE);";
$sql[72] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Varan ostnoocasý','Varanus acanthurus','plaz','jester',FALSE,'Afrika',FALSE);";
$sql[73] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Varan skvrnitý','Varanus salvator','plaz','jester',FALSE,'Afrika',TRUE);";
$sql[74] = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Zajíc polární','Lepus arcticus','savec','',FALSE,'Evropa',TRUE);";


for ($i==0;$i<count($sql,COUNT_NORMAL);$i++) {
    if ($conn->query($sql[$i]) === TRUE) {
        echo "Zaznamy vlozeny do tabulky" . PHP_EOL;
    } else {
        echo "Sorry, nepovedlo se vytvorit vlozit zaznamy: " . $conn->error;
    }
}

$conn->close();
?>