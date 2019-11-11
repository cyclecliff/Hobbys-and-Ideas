<?php
$galg = NULL;

$galg0 = array(
    "\n", "                         ",
    "                         ",
    "                         ",
    "                         ",
    "                         ",
    "                         ",
    "                         ",
    "                         ",
    "                         ",
    "                         ",
    "  MMMMMMMMMMMMMMMMMMMMMMM", "\n"
); //fundament

$galg1 = array(
    "\n", "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "  MMMMMMMMMMMMMMMMMMMMMMM", "\n"
); //paal

$galg2 = array(
    "\n", "       []=========       ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "  MMMMMMMMMMMMMMMMMMMMMMM", "\n"
); //hangstok

$galg3 = array(
    "\n", "       []=========       ",
    "       [] //             ",
    "       []//              ",
    "       []/               ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "  MMMMMMMMMMMMMMMMMMMMMMM", "\n"
); //schuinebalk

$galg4 = array(
    "\n", "       []=========|      ",
    "       [] //      |      ",
    "       []//       |      ",
    "       []/               ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "  MMMMMMMMMMMMMMMMMMMMMMM", "\n"
); //touw

$galg5 = array(
    "\n", "       []=========|      ",
    "       [] //      |      ",
    "       []//       |      ",
    "       []/      {O.O}    ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "  MMMMMMMMMMMMMMMMMMMMMMM", "\n"
); //hoofd

$galg6 = array(
    "\n", "       []=========|      ",
    "       [] //      |      ",
    "       []//       |      ",
    "       []/      {O.O}    ",
    "       []        | |     ",
    "       []        |_|     ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "  MMMMMMMMMMMMMMMMMMMMMMM", "\n"
); //torso

$galg7 = array(
    "\n", "       []=========|      ",
    "       [] //      |      ",
    "       []//       |      ",
    "       []/      {O.O}____",
    "       []        | |     ",
    "       []        |_|     ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "  MMMMMMMMMMMMMMMMMMMMMMM", "\n"
); //rechterarm

$galg8 = array(
    "\n", "       []=========|      ",
    "       [] //      |      ",
    "       []//       |      ",
    "       []/  ____{O.O}____",
    "       []        | |     ",
    "       []        |_|     ",
    "       []                ",
    "       []                ",
    "       []                ",
    "       []                ",
    "  MMMMMMMMMMMMMMMMMMMMMMM", "\n"
); //linkerarm

$galg9 = array(
    "\n", "       []=========|      ",
    "       [] //      |      ",
    "       []//   HEEE|EELP  ",
    "       []/  ____{O.O}____",
    "       []        | |     ",
    "       []        |_|     ",
    "       []           \    ",
    "       []            \   ",
    "       []             \  ",
    "       []                ",
    "  MMMMMMMMMMMMMMMMMMMM", "\n"
); //rechterbeen

$galg10 = array(
    "\n", "       []=========|      ",
    "       [] //      |      ",
    "       []//   OH  |  NO..",
    "       []/      {X.X}    ",
    "       []       /| |\    ",
    "       []       ||_||   ",
    "       []       || ||    ",
    "       []        | |     ",
    "       []       _| |_    ",
    "       []                ",
    "  MMMMMMMMMMMMMMMMMMMMMMM", "\n"
);
$galgwin = array(
    "\n", "       []=========       ",
    "       [] //             ",
    "       []//   PFEW..:D",
    "       []/               ",
    "       []   ____{^v^]____",
    "       []        | |     ",
    "       []        |_|     ",
    "       []       /   \    ",
    "       []      /     \   ",
    "       []     /       \  ",
    "  MMMMMMMMMMMMMMMMMMMMMMM", "\n"
);;
$galgwin2 = array(
    "\n", "                     ",
    "                         ",
    "        YOU SMARTASS!    ",
    "                         ",
    "           {^v^]         ",
    "         _ /| |\         ",
    "            |_| |        ",
    "           /   \         ",
    "          /     \        ",
    "         /       \       ",
    "  MMMMMMMMMMMMMMMMMMMMMMM", "\n"
);


// THIS SHOULD BE VISIBLE ON GITHUB>COM



/////////////////(/\array-galgstappen-tekst/\)///////////////////////
//////////////////////////////////////////////////////////////////////
$GalgjeWoord = NULL;                    //placeholder galgjewoord
$GalgWoordArray = array();                 //placeholde voor galgjewoord-array
$GeraaddeLettersArray = array();  //placeholder geraaddeletters-array (eerst _ _ _ _ )
$gebruikteLetters = array();
//////////////////////////          het_spel_begint                      ////////////////////////////////////////////
echo "\nWe gaan galgje spelen!\n\nBedenk een woord en  voer het in.\n
(PS:Let op dat het goed gespeld is en met lage letters)\n\n"; // moet lage letters wel?
//////////////////////////        galgjewoord_word_ingevoerd           ////////////////////////////////////////////
$GalgjeWoord = trim(fgets(STDIN));
function Hoofdletters($GalgjeWoord)
{
    return (bool) preg_match('/[A-Z]/', $GalgjeWoord);
}
while (Hoofdletters($GalgjeWoord)) {
    echo "\nHet woord mag geen hoofdletters bevatten!\n\nVoer opnieuw een woord in\n\n";
    $GalgjeWoord = trim(fgets(STDIN));
    // string van galgjewoord
}
$GalgWoordArray = str_split($GalgjeWoord);   // galgjewoord wordt in een array gepleurd
/////////////////////////////galgjewoord_word_in_array_gepleurd_en(_ _ _ _ _ _ )/////////////////////////////////////////
echo "Goedzo! Het woord '$GalgjeWoord' is opgeslagen en nu kun je beginnen met raden.\n
We gaan eerst even wel een aantal regels overslaan om het woord te verstoppen voor je slachtoffer:D
\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";
echo "We spelen galgje! Typ een letter of een heel woord, kies maar. (Je hebt 10 kansen en een woord is 2 kansen waard)\n\n";
/////////////////////////////////////////(_ _ _ _ _ _ _ _ _ _)//////////////////////////////////////////////////
//dit is een gerraade letters array (zelfde aantal keys als $GalgWoordArray) 
$GeraaddeLettersArray = array_fill(0, strlen($GalgjeWoord), " _ ");
echo str_repeat(" _ ", strlen($GalgjeWoord)) . "\n\n Het woord heeft " . strlen($GalgjeWoord) . " letters\n\n";
//mischien ook een array van letters die al zijn gebruikt
// UNO? spelers, kaartenarrays
for ($Kansen = 1; $Kansen <= 10; $Kansen++) {
    //if ($Kansen == 1) {
    //       echo implode($GeraaddeLettersArray);
    //   }
    echo "De volgende foute letters zijn al gebruikt: " . implode("", $gebruikteLetters) . "\n\n";
    echo "Voer een letter of woord in.\n\n";
    $GeraaddeLetterOfWoord = trim(fgets(STDIN));
    if ($Kansen < 9) {
        $kans = "kansen";
    } else {
        $kans = "kans!";
    }

    if (strlen($GeraaddeLetterOfWoord) > strlen($GalgjeWoord)) {                                            // als het MEER letters dan nodig heeft, is het sws fout en slaat hij 2 stappen over
        $Kansen += 1;
        echo "\nDit woord is te lang, probeer het opnieuw (Je hebt nog " . (10 - $Kansen) . " $kans.)\n";
        print(implode("\n", ${"galg$Kansen"})); //print bijbehorende galgstap
        echo implode($GeraaddeLettersArray);
    } elseif (strlen($GeraaddeLetterOfWoord) < strlen($GalgjeWoord) && strlen($GeraaddeLetterOfWoord) > 1) { //als er MINDER letters in het woord zitten EN meer dan 1
        $Kansen += 1;
        echo "\nDit woord is te kort, probeer het opnieuw (Je hebt nog " . (10 - $Kansen) . " $kans.)\n";
        print(implode("\n", ${"galg$Kansen"})); //print bijbehorende galgstaphall
        echo implode($GeraaddeLettersArray);
    } elseif ($GeraaddeLetterOfWoord != $GalgjeWoord && strlen($GeraaddeLetterOfWoord) == strlen($GalgjeWoord)) {
        $Kansen += 1;
        print(implode("\n", ${"galg$Kansen"}));
        echo "\nHelaas! Dat woord is niet goed!. (Je hebt nog " . (10 - $Kansen) . " $kans over.) \n\n";
    }

    if (in_array($GeraaddeLetterOfWoord, $GalgWoordArray) && strlen($GeraaddeLetterOfWoord) == 1) {
        // als de letter in het woord zit,, zoek de key van de letter in galgjewoordarray jen kopieer die value(letter) naar de zelfde key in $GeraaddeLettersArray
        $KeysVanZelfdeLetters = array_keys($GalgWoordArray, $GeraaddeLetterOfWoord);
        //array_fill_keys($KeysVanZelfdeLetters, $GeraaddeLetterOfWoord); //this not working now << replace existing values, not create a new array
        for ($Key = 0; $Key < strlen($GalgjeWoord); $Key++) { //voor de lengte van het te raden woord foreach zal werken
            foreach ($KeysVanZelfdeLetters as $key => $KeyMetLetter) {
                if (array_key_exists($Key, $GeraaddeLettersArray)) {
                    $GeraaddeLettersArray[$KeyMetLetter] = " " . $GeraaddeLetterOfWoord . " "; //[key] moet alle keys in zich hebben dit wordt gedaan door foreach
                };
            }
        }
        // ben een for loop aant maken die per key de value opnieuw aanbrengt
        //print(implode($GeraaddeLettersArray));
        $Kansen -= 1;
        print(implode("\n", ${"galg$Kansen"}));
        echo implode($GeraaddeLettersArray);
        array_push($gebruikteLetters, "/$GeraaddeLetterOfWoord");
        echo "\nGoedzo! De letter '$GeraaddeLetterOfWoord' zit erin!. (Je hebt nog " . (10 - $Kansen) . " $kans over.) \n\n";
    } elseif ($GeraaddeLetterOfWoord == $GalgjeWoord) {
        $Kansen -= 1;
        if ($Kansen > 4) {
            print(implode("\n", $galgwin));
        }
        if ($Kansen == 0) {
            print(implode("\n", $galgwin2));
        }
        if ($Kansen > 8) {
            $kans = "kans";
        }
        // print(implode("\n", ${"galg$Kansen"}));
        echo "\nGoedzo! Dat woord is goed!. (Je hebt gewonnen met nog " . (10 - $Kansen) . " $kans over.) \n\n";
        return FALSE;
    } elseif ($Kansen != 10 && strlen($GeraaddeLetterOfWoord) == 1) {
        print(implode("\n", ${"galg$Kansen"}));
        if ($Kansen == 10) {
            $kans += "!";
        }
        echo implode($GeraaddeLettersArray);
        echo "\nHelaas, de letter '$GeraaddeLetterOfWoord' zit er niet in. (Je hebt nog " . (10 - $Kansen) . " $kans.)\n\n";



        array_push($gebruikteLetters, "/$GeraaddeLetterOfWoord");
    } elseif ($Kansen == 10) {
        print(implode("\n", ${"galg$Kansen"}));
        echo implode($GeraaddeLettersArray);
        echo "\n Oh Oh.....volgende keer beter.";
    }
    if ((str_replace(" ", "", implode($GeraaddeLettersArray))) == $GalgjeWoord) { //stel:alle letters zitten al in de array //nu is gerraadelettersarray niet klein te krijgen
        if ($Kansen > 5) {
            print(implode("\n", $galgwin));
        }
        echo implode($GeraaddeLettersArray);
        echo "\nMooi! Het lijkt erop dat je alle letters hebt geraden!. (Je hebt gewonnen met nog " . (10 - $Kansen) . " $kans over.) \n\n";
        return FALSE;
    }
    //print_r($KeysVanZelfdeLetters); this thing has the keys in it
    // print(trim(implode($GalgWoordArray)));
    //$GeraaddeLettersArray = str_replace(" ", "", implode($GeraaddeLettersArray));
    // print($GeraaddeLettersArray);
    //print("_" . str_replace(" ", "", implode($GeraaddeLettersArray)));
}

// if letter in functie, print vernieuwe streepjes string
// else ga een stap door met de galg/.
//bij laatste kans ! maar bij gewonnen geen!
//je hebt alle letters geraden!!
