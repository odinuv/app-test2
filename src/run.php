<?php

declare(strict_types=1);

use Keboola\Component\Logger;
use Keboola\Component\UserException;
use Symfony\Component\Filesystem\Filesystem;

require __DIR__ . '/../vendor/autoload.php';

$logger = new Logger();
try {
    $logger->info("first Executing query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archive");
    sleep(1);
    $logger->warn("warning");
    sleep(1);
    $logger->error("error");
    sleep(1);
    $logger->info("second");
    $fs = new Filesystem();
    $fs->copy('/data/config.json', '/data/out/state.json');
    $str = 'Spicy jalapeno bacon ipsum dolor amet brisket swine flank kevin burgdoggen corned beef. Shoulder shank ham alcatra ball tip rump doner. Short loin ground round bacon pork belly swine burgdoggen andouille drumstick shank boudin porchetta alcatra ribeye pastrami ball tip. Flank pork belly rump, pig shank alcatra pork ground round venison pork chop kielbasa meatball ham hock sausage bresaola. Capicola burgdoggen ball tip turducken, hamburger pastrami ribeye sirloin kielbasa bacon pork chop rump beef ribs.

Pig spare ribs brisket, filet mignon pork chop doner bacon tri-tip turkey. Tri-tip beef hamburger t-bone filet mignon frankfurter corned beef turducken cupim brisket shoulder pig. Strip steak shank meatball turkey. Drumstick landjaeger chicken, biltong pork hamburger swine porchetta burgdoggen ground round short loin ribeye prosciutto. Landjaeger tongue pork chop, t-bone pork loin kevin capicola meatball ball tip shankle rump drumstick kielbasa boudin.

Rump shoulder jowl burgdoggen. Jowl flank pork belly doner filet mignon ball tip spare ribs buffalo jerky pig meatloaf drumstick andouille. Sirloin drumstick andouille chicken turkey. Sirloin ball tip filet mignon landjaeger tail salami tongue kevin jowl porchetta biltong venison t-bone chicken pork. Short loin frankfurter beef brisket tri-tip pork belly bresaola.

Pork loin boudin frankfurter filet mignon pork chop bacon venison. Pig sirloin frankfurter tenderloin, pork belly beef ribs kielbasa cupim hamburger pancetta jerky ham hock pork chop. Salami ball tip prosciutto tenderloin rump, pancetta corned beef spare ribs andouille kevin short ribs buffalo short loin shankle meatball. Jerky beef ribs jowl, shank pancetta pastrami tongue tenderloin t-bone sausage burgdoggen. Jerky boudin hamburger meatball. Meatball turducken chicken tail, kielbasa pancetta short loin tri-tip picanha pork chop salami buffalo meatloaf.

Venison t-bone rump ground round filet mignon shoulder flank pork loin buffalo jowl salami pork chop cupim kevin. Ham pork belly pancetta swine tongue ham hock burgdoggen. Spare ribs shankle bacon ground round jerky. Shoulder ham salami turkey tail drumstick leberkas doner jerky venison ribeye bacon tongue cow.

Picanha short ribs biltong pastrami, turkey brisket pork chop jowl frankfurter buffalo rump beef flank ribeye swine. Ball tip fatback boudin pig beef pork loin burgdoggen spare ribs sausage pastrami pork andouille kielbasa. Fatback venison porchetta rump chuck pig jerky bacon kielbasa spare ribs. Short loin hamburger tail sirloin meatball.

Tenderloin swine meatball pastrami strip steak pork chop buffalo pork belly t-bone leberkas doner tail turducken. Bacon pastrami picanha, cow turkey rump leberkas chuck kevin tail filet mignon shoulder meatloaf spare ribs. Ribeye pig jowl sausage short ribs. Tongue strip steak corned beef turducken.

Pork belly bresaola venison swine, shoulder jowl ground round beef burgdoggen pastrami meatball turkey sausage. Tongue beef pancetta short loin boudin. Cow pork pancetta meatloaf pastrami. Shoulder frankfurter shank short ribs prosciutto. Ham hock fatback doner leberkas cupim brisket ground round kielbasa strip steak bresaola landjaeger.

Frankfurter ham shank cupim short ribs kielbasa. Picanha turducken rump, tenderloin brisket tongue salami pig leberkas turkey kevin prosciutto. Pork chop venison porchetta chuck frankfurter sirloin t-bone leberkas kevin. Hamburger jerky salami cow tongue kielbasa tenderloin.

Bresaola brisket turkey biltong. Doner salami t-bone shoulder beef pastrami jowl ham capicola alcatra. Strip steak chuck swine shoulder landjaeger chicken cupim filet mignon meatball spare ribs buffalo tri-tip jerky pork. Jerky burgdoggen doner alcatra spare ribs. Picanha brisket turkey ham hock, meatloaf pork loin beef. Buffalo drumstick prosciutto, beef fatback brisket beef ribs shank pork loin.

Chicken alcatra biltong flank, burgdoggen cow beef ribs porchetta ham short loin short ribs. Shank corned beef strip steak tri-tip, jerky boudin pork belly shoulder. Spare ribs shank buffalo salami short loin cupim. Ground round shoulder hamburger, kevin pork chop alcatra t-bone cow chuck chicken tongue ball tip. Corned beef doner sausage ground round drumstick landjaeger.

Chicken sausage ball tip kielbasa. Ham hock ball tip leberkas corned beef biltong chicken chuck. Leberkas chuck prosciutto pancetta meatloaf shankle ribeye brisket picanha pig hamburger ham hock pork chop. Shankle pancetta bresaola beef ribs kevin.

Capicola kielbasa jerky tri-tip pancetta buffalo bresaola. Cupim burgdoggen fatback sausage buffalo strip steak. Tenderloin pork loin bresaola meatloaf filet mignon meatball hamburger kevin. Pork loin turkey t-bone chuck, burgdoggen strip steak rump hamburger pork frankfurter ham hock spare ribs porchetta kielbasa pastrami. Ham landjaeger venison boudin tri-tip drumstick spare ribs swine capicola buffalo chicken turkey sirloin flank. Sausage tongue tenderloin, leberkas cow landjaeger filet mignon porchetta brisket ham hock shankle salami drumstick. Picanha shankle landjaeger salami boudin hamburger tri-tip rump ham hock.

Porchetta strip steak boudin, pastrami swine pork ham hock venison t-bone salami. Salami pig kielbasa turducken porchetta, doner shankle ball tip jowl sirloin rump frankfurter kevin meatloaf cupim. Cupim prosciutto pork belly shank chicken porchetta beef ribs bresaola short ribs rump meatloaf. Pig short loin chicken, porchetta brisket prosciutto t-bone shankle short ribs pork chop turducken ham hock ground round shank kevin. Boudin corned beef pork turkey tri-tip leberkas sausage. Short ribs tri-tip beef ribs sirloin pork belly.

Boudin shank ribeye sausage. Cupim meatloaf burgdoggen, fatback sausage tail tongue picanha meatball strip steak flank alcatra. Leberkas boudin ball tip hamburger short ribs. Pork belly turducken shank salami tri-tip, andouille filet mignon beef t-bone. Meatloaf kevin ground round fatback filet mignon doner porchetta boudin ribeye.

Does your lorem ipsum text long for something a little meatier? Give our generator a try… it’s tasty!';
    throw new UserException($src);
    $app = new MyComponent\Component($logger);
    $app->run();
    exit(0);
} catch (UserException $e) {
    $logger->error($e->getMessage());
    exit(1);
} catch (\Throwable $e) {
    $logger->critical(
        get_class($e) . ':' . $e->getMessage(),
        [
            'errFile' => $e->getFile(),
            'errLine' => $e->getLine(),
            'errCode' => $e->getCode(),
            'errTrace' => $e->getTraceAsString(),
            'errPrevious' => $e->getPrevious() ? get_class($e->getPrevious()) : '',
        ]
    );
    exit(2);
}