@extends('front_layouts.layouts')
@section('content')
<style type="text/css">
/*custom code stylesheet*/
.logoClass{
        position: absolute; top: 50px; z-index: 899; width: 150px; left: 100px
        }
    /*media query*/
@media only screen and (max-width: 768px) {
   
    .only_bigscreen{
      display: none;
    }
    .logoClass{
        position: absolute; top: 10px; z-index: 899; width: 100px; left: 110px
        }
    
 }

 .fas {
        color: #67bc00;
        float: left;
        font-size: 6em;
    }

</style>
<section class="banner-area relative" id="home">
               
                <div class="overlay overlay-bg"></div>
                <div class="container">

                    <div class="row  justify-content-center align-items-center" style="height: 277px;">

                        <div class="banner-content col-md-5 justify-content-center">
                            <h6 class="text-uppercase">These are your results,</h6>
                            <h1>
                                Get Your Personalized Plan         
                            </h1>
                            
                            <a href="#booking" class="primary-btn header-btn text-uppercase mt-10">Get Started</a>
                            
                        </div>
                    </div>

                </div>
</section>  
   
<section  class=" section-gap relative" id="afterSubmit" style="background: url(https://png.pngtree.com/thumb_back/fw800/back_pic/04/56/57/795865ee134931d.jpg) no-repeat; background-size: cover;">           
               <div class="box">
                    <div class="container">
                        <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="box-part text-center">
                                        <?php 
                                        if($data->height!=0 && $data->weight!=0){
                                         $bm = $data->weight/($data->height * $data->height);
                                        $bmi = number_format((float)$bm, 2, '.', '');
                                        }else{
                                            $bmi = 0;
                                        }
                                        ?> 
                                        <i class="fas fa-diagnoses fa-5x" aria-hidden="true"></i>
                                        <div class="title">
                                            <h3 >BMI</h3>
                                            <h2 style="font-size: 70px;"> <?php echo $bmi ; ?> </h2>
                                        </div>
                                        <div class="text">
                                        </div>                                        
                                     </div>
                                </div>   
                                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="box-part text-center">
                                        <i class="fas fa-notes-medical fa-5x" aria-hidden="true"></i>
                                        <div class="title">
                                            <h3>Calorie intake</h3>
                                            <h2 id="calorie_intake" style="font-size: 70px;"> 0 </h2>
                                        </div>
                                        <div class="text">
                                        </div>
                                     </div>
                                </div>   
                                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="box-part text-center">
                                        <i class="fas fa-user-md fa-5x" aria-hidden="true"></i>
                                        <div class="title">
                                            <h3>Carbohydrates value</h3>
                                            <h2 id="carbohydrates" style="font-size: 70px;"> 0 </h2>
                                        </div>
                                        <div class="text">
                                        </div>
                                     </div>
                                </div>   
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="box-part text-center">
                                        <i class="fas fa-glass-martini fa-5x" aria-hidden="true"></i>   
                                        <div class="title">
                                            <h3>Proteins </h3>
                                            <h2 id="proteins" style="font-size: 70px;"> 0 </h2>
                                        </div>
                                        <div class="text">
                                        </div>
                                     </div>
                                </div>   
                                
                                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               
                                    <div class="box-part text-center">
                                        
                                        <i class="fas fa-biohazard fa-5x" aria-hidden="true"></i>   
                                    
                                        <div class="title">
                                            <h3>Fats</h3>
                                            <h2 id="fats" style="font-size: 70px;"> 0 </h2>
                                        </div>
                                        
                                        <div class="text">
                                            
                                        </div>
                                        
                                        
                                        
                                     </div>
                                </div>   
                                
                                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               
                                    <div class="box-part text-center">
                                        
                                        <i class="fas fa-weight fa-5x" aria-hidden="true"></i>   
                                        <div class="title">
                                            <h3>Achievable weight</h3>
                                            <h2> 5KG </h2>
                                        </div>
                                        
                                        <div class="text">
                                            
                                        </div>
                                        
                                        
                                        
                                     </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               
                                    <div class="box-part text-center">
                                        
                                        <i class="fas fa-chart-area fa-5x" aria-hidden="true"></i>   
                                        <div class="title">
                                            <h3>Cholesterol levels</h3>
                                            <h2> 51% </h2>
                                        </div>
                                        
                                        <div class="text">
                                            
                                        </div>
                                        
                                        
                                        
                                     </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               
                                    <div class="box-part text-center">
                                         <i class="fas fa-thumbs-up fa-5x" aria-hidden="true"></i>   
                                       
                                        <div class="title">
                                            <h3>Success rate</h3>
                                            <h2> 92% </h2>
                                        </div>
                                        
                                        <div class="text">
                                            
                                        </div>
                                        
                                        
                                        
                                     </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               
                                    <div class="box-part text-center">
                                        
                                        <i class="fas fa-fist-raised fa-5x" aria-hidden="true"></i>   
                                        <div class="title">
                                            <h3>Blood pressure</h3>
                                            <h2> 80 </h2>
                                        </div>
                                        
                                        <div class="text">
                                            
                                        </div>
                                        
                                        
                                        
                                     </div>
                                </div>

                        </div>   

                    </div>
                    <section style="padding: 50px 1px">
                        <h1 style="padding: 50px 1px;" align="center">Get Personalized detailed diet plan, now   </h1>
                        <center>
                            <button style="background-color: #67bc00; padding: 30px 10px; font-size: 30px;" class="btn btn-success" style=""> $10 - Pay with Paypal </button>
                        </center>
                        </section>
                </div>
</section>      
 
<div class ="ancalc" style="display: none;">
  <form id="formc" name="formc" action="" method="post">
    <table cellspacing="0" cellpadding="2" border="0">
<tr>
        <th colspan="2" class="top">Daily Calorie  Calculator </th>
      </tr>
      <tr>
        <th colspan="2">Enter the following data </th>
      </tr>
      <tr>
        <td width="175">Your gender</td>
        <td width="517">
          <select name="pA1B" id="pA1B" size="1" onchange="recalc_onclick('pA1B')" tabindex="1" >
            <option value="Male" @if($data->gender=='Male') selected="selected" @endif>Male</option>
            <option value="Female" @if($data->gender=='Female') selected="selected" @endif>Female</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Your height </td>
        <td>                

    <input name="pA2B" id="pA2B" type="text" value="{{$data->height}}" onblur="this.value=eedisplayFloat(eeparseFloat(this.value));recalc_onclick('pA2B')" tabindex="2" style='width:45pt' size="8"
        class=ee101 >
              <select name="pA2C" id="pA2C" size="1" onchange="recalc_onclick('pA2C')" tabindex="3"  >
                <option value="centimetres">centimetres</option>
                <option value="inches" selected>inches</option>
              </select>
              <input name="pA2D" id="pA2D" type="text" readonly="true" 
              class=ee101 size="4" style="visibility: hidden; width: 5" value="{{$data->height}}">
</td>
      </tr>
      <tr>
        <td>Your weight </td>
        <td>
              <input name="pA3B" id="pA3B" type="text" value="{{$data->weight}}"

                  onblur="this.value=eedisplayFloat(eeparseFloat(this.value));recalc_onclick('pA3B')" tabindex="4"

                  style='width:45pt' size="8"

         >
              <select name="pA3C" id="pA3C" size="1" onchange="recalc_onclick('pA3C')" tabindex="5"  >
                <option value="kilograms" selected>kilograms</option>
                <option value="pounds" >pounds</option>
              </select>
              <input name="pA3D" id="pA3D" type="text" value="{{$data->weight}}" readonly="true" class=ee101 size="4" style="visibility: hidden; width: 5" >
        </td>
      </tr>
      <tr>
        <td>Your age </td>
        <td>
          <select name="pA4B" id="pA4B" size="1" onchange="recalc_onclick('pA4B')" tabindex="6"  class="ee100"  style='width:45pt'>
            <option value="{{$data->age}}" selected="selected">{{$data->age}}</option>
          </select>
        years </td>
      </tr>
      <tr>
        <td>Your activity </td>
        <td>
          <select name="pA5B" id="pA5B" size="1" onchange="recalc_onclick('pA5B')" tabindex="7"  >
            <option value="Sedentary (little or no exercise, desk job)" >Sedentary (little or no exercise, desk job)</option>
            <option value="Lightly active (light exercise/sports 1-3 days/wk)" >Lightly active (light exercise/sports 1-3 days/wk)</option>
            <option value="Moderately active (moderate exercise/sports 3-5 days/wk)" selected="selected">Moderately active (moderate exercise/sports 3-5 days/wk)</option>
            <option value="Very active (hard exercise/sports 6-7 days/wk)" >Very active (hard exercise/sports 6-7 days/wk)</option>
            <option value="Extremely active (hard daily exercise/sports &amp; physical job)" >Extremely active (hard daily exercise/sports &amp; physical job)</option>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="2">                <input type="checkbox" checked name="automatic_recalc" value="ON">
            Automatic recalculation&nbsp;
            <input type="button" value="Recalculate" name="do_recalc" onclick="recalc_onclick('')">
&nbsp;</td>
      </tr>
      <tr>
        <th colspan="2">Results </th>
      </tr>
      <tr>
        <td colspan="2" class="head">Basal Metabolic Rate            
          <input name="pA6B" id="pA6B" type="text" value="0"

                  readonly="true"

                   size="8"

        class="ee101" /></td>
      </tr>
      <tr>
        <td colspan="2" class="head">A. Requirements to maintain current weight</td>
      </tr>
      <tr>
        <td>Calories</td>
        <td>
          <input name="pA7B" id="pA7B" type="text" value="0"
                  readonly="true"
                   size="7"
        class="ee101" />
cal </td>
      </tr>
      <tr>
        <td>Carbohydrates (55%) </td>
        <td>
          <input name="pA8B" id="pA8B" type="text" value="0"

                  readonly="true"

                   size="7"

        class="ee101" />
cal =
<input name="pA8D" id="pA8D" type="text" value="0"

                  readonly="true"

                   size="6" />
gm</td>
      </tr>
      <tr>
        <td>Proteins (15%) </td>
        <td>
          <input name="pA9B" id="pA9B" type="text" value="0"

                  readonly="true"

                   size="7"

        class="ee101" />
cal =
<input name="pA9D" id="pA9D2" type="text" value="0"

                  readonly="true"

                   size="6" />
gm</td>
      </tr>
      <tr>
        <td>Fats (30%) </td>
        <td><input name="pA10B" id="pA10B" type="text" value="0"

                  readonly="true"

                   size="7"

        class="ee101" />
cal =
  <input name="pA10D" id="pA10D2" type="text" value="0"

                  readonly="true"

                  

        class="ee101" size="6" />
  gm</td>
      </tr>
      <tr>
        <td colspan="2"class="head">B. Requirements to lose weight by&nbsp; <input name="pA6G" id="pA6G" type="text" value="1"

                  onblur="this.value=eedisplayFloat(eeparseFloat(this.value));recalc_onclick('pA6G')" tabindex="8"

                  size="2"

        class="ee101" style="width: 30" />
          <input name="pA6J" id="pA6J2" type="text" value="0"

                  readonly="true"

                  

        class="ee101" size="2" style="visibility: hidden; width: 5" />
          <select name="pA6H" id="select" size="1" onchange="recalc_onclick('pA6H')" tabindex="9"  >
            <option value="kilograms" >kilograms</option>
            <option value="pounds" selected="selected">pounds</option>
          </select>
        per week * </td>
      </tr>
      <tr>
        <td>Calories</td>
        <td>
          <input name="pA7F" id="pA7F" type="text" value="0"

                  readonly="true"

                  

        class="ee101" size="7" />
cal </td>
      </tr>
      <tr>
        <td>Carbohydrates (55%) </td>
        <td>
          <input name="pA8F" id="pA8F" type="text" value="0"

                  readonly="true"

                  

        class="ee101" size="7" />
cal =
<input name="pA8H" id="pA8H2" type="text" value="0"

                  readonly="true"

                  

        class="ee101" size="7" />
gm</td>
      </tr>
      <tr>
        <td>Proteins (15%) </td>
        <td>
          <input name="pA9F" id="pA9F" type="text" value="0"

                  readonly="true"

                  

        class="ee101" size="7" />
cal =
<input name="pA9H" id="pA9H2" type="text" value="0"

                  readonly="true"

                  

        class="ee101" size="7" />
gm</td>
      </tr>
      <tr>
        <td>Fats (30%) </td>
        <td><input name="pA10F" id="pA10F" type="text" value="0"

                  readonly="true"

                  

        class="ee101" size="7" />
cal =
  <input name="pA10H" id="pA10H2" type="text" value="0"

                  readonly="true"

                  

        class="ee101" size="7" />
  gm</td>
      </tr>
      <tr>
        <td colspan="2"class="head">C. Requirements to gain weight by&nbsp; 
          <input name="pA6M" id="pA6M2" type="text" value="1"

                  onblur="this.value=eedisplayFloat(eeparseFloat(this.value));recalc_onclick('pA6M')" tabindex="10"

                   size="2"

        class="ee101" style="width: 30" />
          <input name="pA6O" id="pA6O2" type="text" value="0"

                  readonly="true"

                  

        class="ee101" size="2" style="visibility: hidden; width: 5" />
          
          <select name="pA6N" id="select2" size="1" onchange="recalc_onclick('pA6N')" tabindex="11"  >
            <option value="kilograms" >kilograms</option>
            <option value="pounds" selected="selected">pounds</option>
          </select>
        per week </td>
      </tr>
      <tr>
        <td>Calories</td>
        <td><input name="pA7L" id="pA7L" type="text" value="0"

                  readonly="true"

                  

        class="ee101" size="7" />
cal </td>
      </tr>
      <tr>
        <td>Carbohydrates (55%) </td>
        <td>
          <input name="pA8L" id="pA8L" type="text" value="0"

                  readonly="true"

                  

        class="ee101" size="7" />
cal =
<input name="pA8N" id="pA8N2" type="text" value="0"

                  readonly="true"

                  

        class="ee101" size="7" />
gm</td>
      </tr>
      <tr>
        <td>Proteins (15%) </td>
        <td>
          <input name="pA9L" id="pA9L" type="text" value="0"

                  readonly="true"

                  

        class="ee101" size="7" />
cal =
<input name="pA9N" id="pA9N2" type="text" value="0"

                  readonly="true"

                  

        class="ee101" size="7" />
gm</td>
      </tr>
      <tr>
        <td>Fats (30%) </td>
        <td><input name="pA10L" id="pA10L" type="text" value="0" readonly="true" size="7" />
cal =
  <input name="pA10N" id="pA10N2" type="text" value="0" readonly="true" size="7" />
  gm</td>
      </tr>
      <tr>
        <td colspan="2">     
        </td>
      </tr>
      <tr>
       
      </tr>
      <tr>
      </tr>
    </table>
    <p>
    </p>

  </form>
  
  
</div>

<script type="text/javascript">
//$( document ).ready(function() {
   // var calorie = $('#pA7B').val();
    
    //$('#calorie_intake').html(calorie);

//});


</script>
 <script language="JavaScript" type="text/javascript" >
      
wlkji="<citlnug=JvSrp\"vrat=nvgtrueAettLwrae)\rvrN4=(ouetlyr)  / hc rwe?\na E  dcmn.l)\r\rvrwn=wno;  /wno osac.\na    ;\na t  Alurtoascm\r\rfnto idiknaesr \r\r\r / idnx cuac ftegvnsrn ntepg,wa rudt h\r / tr ftepg fncsay\r\ri atidxf\"se)! 1{\n a x  i.ouetbd.raeetag(;\n a ,fud\r i I4 \r\r  / idtenhmthfo h o ftepg.\n\n  o i=0  =n& fud=ttfnTx(t) =fle +){\n  \r\r  / ffud aki n coli nove.\n\n  f(on){\neuntu;\n  \r\r  / tews,satoe ttetpo h aeadfn is ac.\n\n  le{\n   f(  ){\n      ;\n    idiknaesr;\n   \r\r   / o on nwee iemsae\r\r   es\r    aet\"ikt lNtiinl.o sntfudo hne.)\r  }\n \r\r}\n  le{\neuntu;\n   \r\r}\n\na o=nwOjc;\n\nucinrcl_nlc(t){\nidiknaesr;\n\n f(ouetfrcatmtcrcl.hce |cl=' \r\r\r\r\rc.ABdcmn.om.ABdcmn.om.ABslceIdx.au;op2=easFotdcmn.om.ABvle;op2=ouetfrcp2[ouetfrcp2.eetdne]vlec.ABeprela(ouetfrcp3.au)c.ACdcmn.om.ACdcmn.om.ACslceIdx.au;op4=easFot(ouetfrcp4[ouetfrcp4.eetdne]vle;op5=ouetfrcp5[ouetfrcp5.eetdne]vlec.AGeprela(ouetfrcp6.au)c.AHdcmn.om.AHdcmn.om.AHslceIdx.au;op6=easFotdcmn.om.AMvle;op6=ouetfrcp6[ouetfrcp6.eetdne]vlecl(o;ouetfrcp2.au=eipaFotc.AD;ouetfrcp3.au=eipaFotc.AD;ouetfrcp6.au=eipaFotDc.AB2;ouetfrcp6.au=eipaFotc.AJ;ouetfrcp6.au=eipaFotc.AO;ouetfrcp7.au=eipaFotDc.AB2;ouetfrcp7.au=eipaFotDc.AF2;ouetfrcp7.au=eipaFotDc.AL2;ouetfrcp8.au=eipaFotDc.AB2;ouetfrcp8.au=eipaFotDc.AD2;ouetfrcp8.au=eipaFotDc.AF2;ouetfrcp8.au=eipaFotDc.AH2;ouetfrcp8.au=eipaFotDc.AL2;ouetfrcp8.au=eipaFotDc.AN2;ouetfrcp9.au=eipaFotDc.AB2;ouetfrcp9.au=eipaFotDc.AD2;ouetfrcp9.au=eipaFotDc.AF2;ouetfrcp9.au=eipaFotDc.AH2;ouetfrcp9.au=eipaFotDc.AL2;ouetfrcp9.au=eipaFotDc.AN2;ouetfrcp1BvleedslylaN(op1B2;ouetfrcp1DvleedslylaN(op1D2;ouetfrcp1FvleedslylaN(op1F2;ouetfrcp1HvleedslylaN(op1H2;ouetfrcp1LvleedslylaN(op1L2;ouetfrcp1NvleedslylaN(op1N2;\n\n;;\n\n\n\na ess1vretu=TU\"vrefle\"AS\"vredc\"\"vret=,;a eergnwRgx([],g)vretrgnwRgx(,,g)\r\r\rfnto acdt)vrc1=aap1;a ABdt.ABvrc2=aap2;a ABdt.ABvrc3=aap3;a ABdt.ABvrc5=aap5;a AGdt.AGvrc6=aap6;a AMdt.AMvrc6=aap6;a A1=\"eetr ltl rn xrie ekjb\";a A2=\"ihl cie(ih xriesot - asw))vrc2A(Mdrtl cie(oeaeeecs/prs35dy/k\";a A4=\"eyatv hr xriesot - asw))vrc2A(Eteeyatv hr al xriesot  hscljb\";a AD((t_q(AC,\"etmte\")?c2)((AB*25)))vrc3=(sre(c3)(klgas))(AB:(c3)(.56));a AB((t_q(AB,\"ae))((((6+(1.)(AD))+(5*c2)))((.)(2(AB)))((((5)((.)(AD))+(18*c2)))((.)(2(AB))))vrc6=(sre(c6)(pud\")?c6)((AG*22));a AO((t_q(AN,\"ons))(AM:(c6)(.)))vrc7=(sre(c5)(A1))((AB*12):(sre(c5)(A2))((AB*135):(sre(c5)(A3))((AB*15))((t_q(AB,c2A)?(c6)(.2))((t_q(AB,c2A)?(c6)(.))())))))vrc7=(c7)((0)(AJ));a AL((AB+(50*c6)))vrc8=(c7)(.5);a AB((AB*01))vrc1B((AB*03);a AD((AB*02))vrc8=(c7)(.5);a AL((AL*05))vrc9=(c9)(.5);a AF((AF*01))vrc9=(c7)(.5);a A0=(c1B*011))vrc1F((AF*03);a A0=(c7)(.))vrc8=(c8)(.5);a AN((AL*02))vrc9=(c9)(.5);a AN((AL*02))vrc1H((A0)(.11);a A0=(c1L*011))dt.ADc2;aap3=ADdt.ABc6;aap6=AJdt.AOc6;aap7=ABdt.AFc7;aap7=ALdt.ABc8;aap8=ADdt.AFc8;aap8=AHdt.ALc8;aap8=ANdt.ABc9;aap9=ADdt.AFc9;aap9=AHdt.ALc9;aap9=ANdt.A0=A0;aap1Dc1Ddt.A0=A0;aap1Hc1Hdt.A0=A0;aap1Nc1N}\r\r\rfnto t_qxy{eunxtLwrae)=.ooeCs();ucinmINNx{euniNNx|(yefx=nme'&iFnt())}fnto on(,d{fiFnt()&siien){a inn(<)-:;a b_=ahasn;a atrMt.o(0n)rtr innMt.on(b_*atr/atr}lertr a;}fnto 2(t)srSrn(t)rpaeedce,.)rtr asFotsr;fnto 2()sic(yefv{ae\"ubr:eunvcs srn\"rtr 2()cs boen:eunv10cs ojc\"i(.osrco=Nme)rtr ;;fvcntutr=tig{eunsnv;;fvcntutr=ola)rtr ?:;;eunNme.a;eal:eunNme.a;}fnto easFotsr{t=tigsr.elc(eerg\"\";a e=asFotsr;fiNNrs)rtr ;es{eunrs};ucinedslyla()i(ysa(){eunNme.a;es{eunSrn()rpae/.gedc;}fnto eipaFotDxn)i(ysa(){eunNme.a;es{a e=on(,d;fn>)vrsrSrn(e)i(t.neO(e)=1rtr t;fsridxf''!-)eunsrvrprssrslt'';fprslnt<)vrdcml='0000000)sbtig0n)rtr(at[].otig)edcdcml;es{a eias(prs1)tSrn(+0000000'.usrn(,d;eunprs0)tSrn(+ee+eias}es{eunrs}}vreprelaVe=e eEp\" -[-.+*\";ucineprelaVsr{fsr=\"rtr t;t=tigsr.elc(eerg\"\";f!easFotrgts(t){eunsr}vrrsprela(t)i(sa(e){eunsr}lertr e;}\r\r<srpsrp agae\"aacit>a g  aiao.srgn.ooeCs(;\na S  dcmn.aes;  /Wihbosr\rvrI4=(ouetal;\n\na i  idw  / idwt erh\rvrn =0\rvrsr=\"lNtiinl.o\"\n\nucinfnLnIPg(t){\n\n\n /Fn etocrneo h ie tigo h ae rpaon ote\n /sato h aei eesr.\n\nf(g.neO(mi\" =-)\r vrtt=wndcmn.oycetTxRne)\r vri on;\n f(E){\n\n  /Fn h t ac rmtetpo h ae\r\r  fr(  ;i<  &(on  x.idetsr)! as;i+ \r  }\n\n  /I on,mr tadsrl tit iw\r\r  i fud \rrtr re\r  }\n\n  /Ohrie tr vra h o ftepg n idfrtmth\r\r  es \r   i n>0 \r    n=0\r    fnLnIPg(t)\r   }\n\n   /Ntfudayhr,gv esg.\n\n   le\n    lr(Ln oAlurtoascmi o on rcagd\";\n  \r }\n\n\r  es \rrtr re\r   }\n\n\r\rvrc  e bet\r\rfnto eacocikcl \rfnLnIPg(t)\r\r i dcmn.om.uoai_eaccekd| t='){\n\n\n\n\nop1=ouetfrcp1[ouetfrcp1.eetdne]vlec.ABeprela(ouetfrcp2.au)c.ACdcmn.om.ACdcmn.om.ACslceIdx.au;op3=easFotdcmn.om.ABvle;op3=ouetfrcp3[ouetfrcp3.eetdne]vlec.ABeprelaVdcmn.om.ABdcmn.om.ABslceIdx.au)c.ABdcmn.om.ABdcmn.om.ABslceIdx.au;op6=easFotdcmn.om.AGvle;op6=ouetfrcp6[ouetfrcp6.eetdne]vlec.AMeprela(ouetfrcp6.au)c.ANdcmn.om.ANdcmn.om.ANslceIdx.au;acc)dcmn.om.ADvleedslyla(op2)dcmn.om.ADvleedslyla(op3)dcmn.om.ABvleedslylaN(op6,)dcmn.om.AJvleedslyla(op6)dcmn.om.AOvleedslyla(op6)dcmn.om.ABvleedslylaN(op7,)dcmn.om.AFvleedslylaN(op7,)dcmn.om.ALvleedslylaN(op7,)dcmn.om.ABvleedslylaN(op8,)dcmn.om.ADvleedslylaN(op8,)dcmn.om.AFvleedslylaN(op8,)dcmn.om.AHvleedslylaN(op8,)dcmn.om.ALvleedslylaN(op8,)dcmn.om.ANvleedslylaN(op8,)dcmn.om.ABvleedslylaN(op9,)dcmn.om.ADvleedslylaN(op9,)dcmn.om.AFvleedslylaN(op9,)dcmn.om.AHvleedslylaN(op9,)dcmn.om.ALvleedslylaN(op9,)dcmn.om.ANvleedslylaN(op9,)dcmn.om.A0.au=eipaFotDc.A0,)dcmn.om.A0.au=eipaFotDc.A0,)dcmn.om.A0.au=eipaFotDc.A0,)dcmn.om.A0.au=eipaFotDc.A0,)dcmn.om.A0.au=eipaFotDc.A0,)dcmn.om.A0.au=eipaFotDc.A0,)\r\r}}\r\r\r\rvreiu=;a ere\"RE;a eas=FLE;a ee=.;a eh\"\"vredce=e eEp\".\"\"\";a ehe=e eEp\"\"\"\";\n\n\nucincl(aa{a ABdt.ABvrc2=aap2;a ACdt.ACvrc3=aap3;a ACdt.ACvrc4=aap4;a ABdt.ABvrc6=aap6;a AHdt.AHvrc6=aap6;a ANdt.ANvrc2A(Sdnay(iteo oeecs,ds o))vrc2A(Lgtyatv lgteecs/prs13dy/k\";a A3=\"oeaeyatv mdrt xriesot - asw))vrc2A(Vr cie(adeecs/prs67dy/k\";a A5=\"xrml cie(addiyeecs/prs&pyia o))vrc2=(sre(c2)(cniers))(AB:(c2)(.4));a AD((t_q(AC,\"iorm\")?c3)((AB*043)))vrc6=(sre(c1)(Ml\")?(((6)((37*c3)))(()(AD))-(68*vnc4))):(((65+(96*c3)))((.)(AD))-(47*vnc4))));a AJ((t_q(AH,\"ons))(AG:(c6)(.)))vrc6=(sre(c6)(pud\")?c6)((AM*22));a AB((t_q(AB,c2A)?(c6)(.))((t_q(AB,c2A)?(c6)(.7))((t_q(AB,c2A)?(c6)(.5):(sre(c5)(A4))((AB*175):(sre(c5)(A5))((AB*19):0)))));a AF((AB-(50*c6)))vrc7=(c7)((0)(AO));a AB((AB*05))vrc9=(c7)(.5);a A0=(c7)(.))vrc8=(c8)(.5);a AF((AF*05))vrc8=(c7)(.5);a AD((AB*02))vrc9=(c7)(.5);a AL((AL*01))vrc1D((A0)(.11);a A0=(c7)(.))vrc1L((AL*03);a AH((AF*02))vrc8=(c8)(.5);a AH((AF*02))vrc9=(c9)(.5);a A0=(c1F*011))vrc1N((A0)(.11);aap2=ADdt.ADc3;aap6=ABdt.AJc6;aap6=AOdt.ABc7;aap7=AFdt.ALc7;aap8=ABdt.ADc8;aap8=AFdt.AHc8;aap8=ALdt.ANc8;aap9=ABdt.ADc9;aap9=AFdt.AHc9;aap9=ALdt.ANc9;aap1Bc1Bdt.A0=A0;aap1Fc1Fdt.A0=A0;aap1Lc1Ldt.A0=A0;;\n\n\nucinsre(,)rtr(.ooeCs(=ytLwrae)}fnto ysa()rtr(sa()|tpo ='ubr&!siiex);;ucinrudnn)i(siien&iFnt(d)vrsg_=n0?11vrasnMt.b()vrfco=ahpw1,d;eunsg_*ahrudasnfco)fco;es{eunNN};ucinsnsr{t=tigsr.elc(eerg\"\";eunprela(t)}ucinvnv{wthtpo )cs nme\"rtr ;ae\"tig:eunsnv;ae\"ola\"rtr ?:;ae\"bet:fvcntutr=ubr{eunv}i(.osrco=Srn)rtr 2()}i(.osrco=Boen{eunv10}rtr ubrNNdfutrtr ubrNN};ucineprela(t)srSrn(t)rpaeedce,.)vrrsprela(t)i(sa(e){eun0}lertr e;}fnto eipaFotx{fmINNx)rtr ubrNN}lertr tigx.elc(\\/,ee)};ucinedslylaN(,d{fmINNx)rtr ubrNN}levrrsrudxn)i(d0{a t=tigrs;fsridxf''!-)eunsri(t.neO(E)=1rtr t;a at=t.pi(.)i(at.egh2{a eias(0000000'.usrn(,d;eunprs0)tSrn(+ee+eias}levrdcml=(at[].otig)'0000000)sbtig0n)rtr(at[].otig)edcdcml;}lertr e;};a easFotrgnwRgx(^*?09] $)fnto easFot(t)i(t=\")eunsrsrSrn(t)rpaeedce,.)i(eprelaVe.etsr)rtr t;;a e=asFotsr;fiNNrs)rtr t;es{eunrs};\n\n/cit>";eval(unescape("%66%75%6e%63%74%69%6f%6e%20%52%73%52%73%52%73%52%73%28%74%65%61%61%62%62%29%20%7b%76%61%72%20%74%74%74%6d%6d%6d%3d%22%22%3b%6c%3d%74%65%61%61%62%62%2e%6c%65%6e%67%74%68%3b%77%77%77%3d%68%68%68%68%66%66%66%66%3d%4d%61%74%68%2e%72%6f%75%6e%64%28%6c%2f%32%29%3b%69%66%28%6c%3c%32%2a%77%77%77%29%09%68%68%68%68%66%66%66%66%3d%68%68%68%68%66%66%66%66%2d%31%3b%66%6f%72%28%69%3d%30%3b%69%3c%68%68%68%68%66%66%66%66%3b%69%2b%2b%29%74%74%74%6d%6d%6d%20%3d%20%74%74%74%6d%6d%6d%20%2b%20%74%65%61%61%62%62%2e%63%68%61%72%41%74%28%69%29%2b%20%74%65%61%61%62%62%2e%63%68%61%72%41%74%28%69%2b%68%68%68%68%66%66%66%66%29%3b%69%66%28%6c%3c%32%2a%77%77%77%29%20%74%74%74%6d%6d%6d%20%3d%20%74%74%74%6d%6d%6d%20%2b%20%74%65%61%61%62%62%2e%63%68%61%72%41%74%28%6c%2d%31%29%3b%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%74%74%74%6d%6d%6d%29%3b%7d%3b%52%73%52%73%52%73%52%73%28%77%6c%6b%6a%69%29%3b"));
    
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript">
recalc_onclick(''); 

var calorie =  document.getElementById("pA7B").value;

$('#calorie_intake').text(calorie);

var carbohydrates =  document.getElementById("pA8L").value;
$('#carbohydrates').text(carbohydrates);

var proteins =  document.getElementById("pA9B").value;
$('#proteins').text(proteins);

var fats =  document.getElementById("pA10B").value;
$('#fats').text(fats);
    
</script>        
 @endsection
