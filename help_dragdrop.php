<?php 
    include_once ("./left.php");
?>    
<h3> DRAG AND DROP HELPER </h3>

<br>

<button type="button"class="btn-xs btn-primary"  style='width:80px; height:60px;'
onclick="convert();">		
<span class="glyphicon glyphicon-folder-open"></span><br>&nbsp;&nbsp;Convert  <!--0-->
</button>
<br>
<br>


<div id='left' style='width:400px;height:500px;display:inline-block; position:relative; float:left;'>
<textarea id='mTxt' style='width:400px;height:500px;border:1px dashed #d10000;color:#000; ' placeholder='Copy paste here'>
Nel mare ci sono i coccodrilli
In questo romanzo, di grandissimo successo, Fabio Geda è riuscito a raccontare una storia di immigrazione che fa commuovere e riflettere i lettori. 
Il ragazzino protagonista, Enaiat ormai adulto, è la voce *1* (1) che parla con Fabio, l’autore che lo incoraggia a raccontarsi.
La vera storia di Enaiatollah Akbari, del suo lungo viaggio dall’Afghanistan all’Italia, ha dell’incredibile e
mostra la straordinaria forza e la profonda disperazione che spingono milioni di *2* (2) a
partire, lasciandosi tutto alle *3* (3) e correndo enormi pericoli. Il giovane ha dovuto infatti
sfidare la fame, i *4* (4), la solitudine e il viaggio nelle acque del Mediterraneo in cui molti
hanno perso la vita in cerca di un  *5* (5) sicuro.
L’aspetto che più colpisce del libro è la leggerezza con cui il protagonista
riesce a parlare di sé e di quanti come lui hanno tentato l’impossibile, malgrado il dolore vissuto e l’ *6* (6) negata. Quella di Enaiat è una
 *7* (7) eccezionale, per la sua capacità di raccontare, di descrivere, di condannare senza odio le violenze e le privazioni di chi è fuggito
ed è sopravvissuto all’ *8* (8).
Per fortuna la sua storia, a differenza di altre che hanno avuto un finale
 *9* (9), si è conclusa bene: il giovane, che a 10 anni non sapeva né leggere né scrivere, si è laureato in Scienze Internazionali all’Università di Torino.
</textarea>
</div>

<div id='left' style='width:200px;height:500px;display:inline-block; position:relative; float:left;'>
	
<textarea id='mAns' style='width:200px;height:500px;border:1px dashed #d10000;color:#000; ' placeholder='Copy paste here'>
*narrante*
*migranti*
*spalle*
*trafficanti*
*porto*
*infanzia*
*testimonianza*
*inferno*
*tragico*
</textarea>
</div>



<div id='right' style='width:700px;height:900px;display:inline-block; position:relative; float:left;'>
	<textarea id='mRes' style='width:700px;height:900px;border:1px dashed #d10000;color:#000; ' placeholder='Copy paste here'>
Answears:
		
	</textarea>
</div>

<script>
function convert()  {
    mTxt=document.getElementById("mTxt").value;
    mAns=document.getElementById("mAns").value;
    mRes=document.getElementById("mRes");
    mRes.value='';


     var answears = mAns.split("\n");
     var answears_len = answears.length;
     for (i=0; i < answears_len; i++) {
            // #252; undo param space replacement
      //      mRes.value=mRes.value+answears[i]+"\n";
     }


mRes.value=mRes.value+'<ul class="drag-grid"> \n';

            for (i=0; i < answears.length; i++) {
                sAns=answears[i];
                sAns=sAns.replace('* ','*');
                sAns=sAns.replace('* ','*');
                sAns=sAns.replace(' *','*');
                sAns=sAns.replace(' *','*');

                sAns=sAns.replace('*','');
                sAns=sAns.replace('*','');

                mRes.value=mRes.value+'<li class="items" data-object="'+sAns+'"> '+sAns+' </li> \n';
             }   
    

mRes.value=mRes.value+"</ul> \n\n\n\n";

     var txts = mTxt.split("\n");
     var txt_len = txts.length;
     var sl=0;
     for (w=0; w<txt_len; w++) {
            // #252; undo param space replacement
            s1=txts[w];
            for (i=0; i < answears.length; i++) {


            	s1=s1.replace('* ','%> ');
                s1=s1.replace(' *',' <%');

                s1=s1.replace('%>  ','%> ');
            	s1=s1.replace('%>  ','%> ');
            	s1=s1.replace('  <%',' <%');
            	s1=s1.replace('  <%',' <%');

            	sAns=answears[i];
            	sAns=sAns.replace('* ','*');
            	sAns=sAns.replace('* ','*');
            	sAns=sAns.replace(' *','*');
            	sAns=sAns.replace(' *','*');

            	sAns=sAns.replace('*','');
            	sAns=sAns.replace('*','');
                s2="";

            	if (s1.includes('<%'+(i+1)+'%>')) 
            		{
            			m1=s1.indexOf('<%');
                        m2=s1.indexOf('%>');

                        s2='<label>\n';
                        s2=s2+s1.substr(0, m1-1)+'';
                        s2=s2+'<input id="sl'+(i+1)+'" type="text" class="input1 ques-7-drag"/>  ';
                        s2=s2+''+s1.substr(m2+2,500);
                        s2=s2+'\n</label>\n ';
              	    }

                    if (s2!="") mRes.value=mRes.value+s2+"\n";
            }


            //<label>1. Benissimo. Quel   <input id="sl1" type="text" class="input2"/> pieno di nuvole ce lo sogniamo ancora.</label>

           // sOut += '<label>'+s1+'<input id="sl'+sl+'" type="text" class="input2"/> </label>';


           
     }


}


</script>