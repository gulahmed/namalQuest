<div class="form-row">
 <div class="form-group col-md-12">
  <label for="email">Email Address</label>
  <input class="form-control" type="text" placeholder="{{ Auth::user()->email }}" name="email" value=""  disabled>
 </div>
</div>

<div class="form-row">
  <div class="form-group col-md-6">
    <label for="applicant_mobile">Applicant's Mobile Number</label>
    <input type="text" class="form-control" name="applicant_mobile" maxlength="11" placeholder="03xxxxxxxxx" value="{{old('applicant_mobile',$applicant->applicant_mobile)}}" required/>
  </div>

  <div class="form-group col-md-6">
    <label for="parent_mobile">Parent / Guardian's Mobile Number</label>
    <input type="text" class="form-control" name="parent_mobile" maxlength="11" placeholder="03xxxxxxxxx" value="{{old('parent_mobile',$applicant->parent_mobile)}}" required/>
  </div>

</div>


<div class="form-row">
 <div class="form-group col-md-6">
 <label for="permenant_address">Permanent Address</label>
  <textarea class="form-control" rows="2" name="permenant_address" placeholder="Street No. ABC, House No. XYZ, Postal Code"  required>{{old('permenant_address',$applicant->permenant_address)}}</textarea>
 </div>

 <div class="form-group col-md-6">
 <label for="postal_address">Postal Address</label>
  <textarea class="form-control" rows="2" name="postal_address" placeholder="Street No. ABC, House No. XYZ, Postal Code" >{{old('postal_address',$applicant->postal_address)}}</textarea>
 </div>
</div>



<div class="form-row">

<div class="form-group col-md-4">
<label for="country">Country</label>

<select class="form-control select2" id="country" name="country"  style="width: 100%"  value="{{old('country',$applicant->country)}}">
       <option value="Pakistan" selected>Pakistan</option>
   </select>

</div>



 <div class="form-group col-md-4">
  <label for="domicile_province">Domicile Province</label>
 <select class="form-control select2" id="domicile_province" name="domicile_province" style="width: 100%" value="{{old('domicile_province',$applicant->domicile_province)}}" required>
      <option disabled selected hidden>Choose...</option>
      <option {{old('domicile_province',$applicant->domicile_province)=="AJK"? 'selected':''}}>AJK</option>
      <option {{old('domicile_province',$applicant->domicile_province)=="Baluchistan"? 'selected':''}}>Baluchistan</option>
      <option {{old('domicile_province',$applicant->domicile_province)=="FATA"? 'selected':''}}>FATA</option>
      <option {{old('domicile_province',$applicant->domicile_province)=="Gilgit Baltistan"? 'selected':''}}>Gilgit Baltistan</option>
      <option {{old('domicile_province',$applicant->domicile_province)=="Islamabad"? 'selected':''}}>Islamabad</option>
      <option {{old('domicile_province',$applicant->domicile_province)=="KPK"? 'selected':''}} >KPK</option>
      <option {{old('domicile_province',$applicant->domicile_province)=="Punjab"? 'selected':''}}>Punjab</option>
      <option {{old('domicile_province',$applicant->domicile_province)=="Sindh"? 'selected':''}}>Sindh</option>
    </select>
 </div>



 <div class="form-group col-md-4">
  <label for="address_district">District </label>
   <select class="form-control select2" name="district" style="width: 100%" value="{{old('district',$applicant->district)}}" required>
	  <option disabled selected hidden>Choose...</option>
          <option {{old('district',$applicant->district)=="Abbottabad"? 'selected':''}} >Abbottabad</option>
	  <option {{old('district',$applicant->district)=="Attock"? 'selected':''}}>Attock</option>
	  <option {{old('district',$applicant->district)=="Awaran"? 'selected':''}}>Awaran</option>
	  <option {{old('district',$applicant->district)=="Badin"? 'selected':''}}>Badin</option>
	  <option {{old('district',$applicant->district)=="Bagh"? 'selected':''}} >Bagh</option>
	  <option {{old('district',$applicant->district)=="Bahawalnagar"? 'selected':''}}>Bahawalnagar</option>
	  <option {{old('district',$applicant->district)=="Bahawalpur"? 'selected':''}} >Bahawalpur</option>
	  <option {{old('district',$applicant->district)=="Bajaur Agency"? 'selected':''}} >Bajaur Agency</option>
	  <option {{old('district',$applicant->district)=="Baltistan"? 'selected':''}} >Baltistan</option>
	  <option {{old('district',$applicant->district)=="Bannu"? 'selected':''}} >Bannu</option>
	  <option {{old('district',$applicant->district)=="Barkhan"? 'selected':''}} >Barkhan</option>
	  <option {{old('district',$applicant->district)=="Batagram"? 'selected':''}}>Batagram</option>
	  <option {{old('district',$applicant->district)=="Bhakkar"? 'selected':''}} >Bhakkar</option>
	  <option {{old('district',$applicant->district)=="Bhimber"? 'selected':''}} >Bhimber</option>
	  <option {{old('district',$applicant->district)=="Bolan"? 'selected':''}} >Bolan</option>
	  <option {{old('district',$applicant->district)=="Bunner"? 'selected':''}} >Bunner</option>
	  <option {{old('district',$applicant->district)=="Chagai"? 'selected':''}}>Chagai</option>
	  <option {{old('district',$applicant->district)=="Chakwal"? 'selected':''}}>Chakwal</option>
	  <option {{old('district',$applicant->district)=="Charsadda"? 'selected':''}} >Charsadda</option>
	  <option {{old('district',$applicant->district)=="Chitral"? 'selected':''}} >Chitral</option>
	  <option {{old('district',$applicant->district)=="D.G. Khan"? 'selected':''}} >D.G. Khan</option>
	  <option {{old('district',$applicant->district)==">D.I. Khan"? 'selected':''}} >D.I. Khan</option>
	  <option {{old('district',$applicant->district)=="Dadu"? 'selected':''}} >Dadu</option>
	  <option >Dera Bughti</option>
	  <option>Diamir</option>
	  <option{{old('district',$applicant->district)=="Faisalabad"? 'selected':''}}  >Faisalabad</option>
	  <option>Ghanchee</option>
	  <option>Ghizer</option>
	  <option>Ghotki</option>
	  <option {{old('district',$applicant->district)=="Gilgit"? 'selected':''}}  >Gilgit</option>
	  <option {{old('district',$applicant->district)=="Gujranwala"? 'selected':''}} >Gujranwala</option>
	  <option {{old('district',$applicant->district)=="Gujrat"? 'selected':''}} >Gujrat</option>
	  <option>Gwadar</option>
	  <option>Hafizabad</option>
	  <option>Hangu</option>
	  <option {{old('district',$applicant->district)=="Haripur"? 'selected':''}}  >Haripur</option>
	  <option {{old('district',$applicant->district)=="Hyderabad"? 'selected':''}} >Hyderabad</option>
	  <option>Jaffarabad</option>
	  <option>Jaccobabad</option>
	  <option>Jhal Magsi</option>
	  <option {{old('district',$applicant->district)=="Jhang"? 'selected':''}} >Jhang</option>
	  <option  {{old('district',$applicant->district)=="Jhelum"? 'selected':''}} >Jhelum</option>
	  <option>Kalat</option>
	  <option {{old('district',$applicant->district)=="Karachi Central"? 'selected':''}}  >Karachi Central</option>
	  <option{{old('district',$applicant->district)=="Karachi East"? 'selected':''}}  >Karachi East</option>
	  <option >Karachi South</option>
	  <option>Karachi West</option>
	  <option {{old('district',$applicant->district)=="Karak"? 'selected':''}}  >Karak</option>
	  <option>Kasur</option>
	  <option>Kech</option>
	  <option>Khairpur</option>
	  <option>Khanewal</option>
	  <option>Kharan</option>
	  <option>Khushab</option>
	  <option>Khuzdar</option>
	  <option>Khyber Agency</option>
	  <option>Killa Abdullah</option>
	  <option>Killa Saifullah</option>
	  <option {{old('district',$applicant->district)=="Kohat"? 'selected':''}}  >Kohat</option>
	  <option>Kohistan</option>
	  <option>Kohlu</option>
	  <option>Kotli</option>
	  <option>Kurram Agency</option>
	  <option {{old('district',$applicant->district)=="Lahore"? 'selected':''}}  >Lahore</option>
	  <option {{old('district',$applicant->district)=="Lakki Marwat"? 'selected':''}}  >Lakki Marwat</option>
	  <option>Larkana</option>
	  <option>Lasbela</option>
	  <option {{old('district',$applicant->district)=="Layyah"? 'selected':''}}  >Layyah</option>
	  <option>Lodhran</option>
	  <option>LoraLai</option>
	  <option>Lower Dir</option>
	  <option>Malakand</option>
	  <option>Mandi Bahauddin</option>
	  <option>Malir</option>
	  <option {{old('district',$applicant->district)=="Mansehra"? 'selected':''}}  >Mansehra</option>
	  <option {{old('district',$applicant->district)=="Mardan"? 'selected':''}} >Mardan</option>
	  <option>Mastung</option>
	  <option>Mianwali</option>
	  <option>Mirpur</option>
	  <option>Mirpurkhas</option>
	  <option>Mohmand Agency</option>
	  <option>Multan</option>
	  <option>Musakhel</option>
	  <option>Muzaffarabad</option>
	  <option>Muzaffargarh</option>
	  <option>Narowal</option>
	  <option>Nasirabad</option>
	  <option>Naushahro Feroze</option>
	  <option>Nawab Shah</option>
	  <option>North Waziristan Agency</option>
	  <option>Nowshera</option>
	  <option>Okara</option>
	  <option>Orakzai Agency</option>
	  <option>Pak Pattan</option>
	  <option>Panjgur</option>
	  <option>Pashin</option>
	  <option>Peshawar</option>
	  <option>Poonch</option>
	  <option>Quetta</option>
	  <option>Rahim Yar Khan</option>
	  <option>Rajanpur</option>
	  <option>Rawalpindi</option>
	  <option>Sahiwal</option>
	  <option>Sanghar</option>
	  <option {{old('district',$applicant->district)=="Sargodha"? 'selected':''}}  >Sargodha</option>
	  <option>Shangla</option>
	  <option {{old('district',$applicant->district)=="Sheikhupura"? 'selected':''}}  >Sheikhupura</option>
	  <option>Shikarpur</option>
	  <option>Sialkot</option>
	  <option>Sibi</option>
	  <option>Sourth Waziristan Agency</option>
	  <option>Sudhnoti</option>
	  <option>Sukkur</option>
	  <option {{old('district',$applicant->district)=="Swabi"? 'selected':''}}  >Swabi</option>
	  <option>Tank</option>
	  <option>Tharparkar</option>
	  <option>Thatta</option>
	  <option>Toba Tek Singh</option>
	  <option>Umerkot</option>
	  <option>Upper Dir</option>
	  <option>Vehari</option>
	  <option>Zhob</option>
	  <option>Ziarat</option>
	</select>

 </div>
</div>
