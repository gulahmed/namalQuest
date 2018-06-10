<div class="form-row">
 <div class="form-group col-md-12">
  <label for="email">Email Address</label>
  <input class="form-control" type="text" placeholder="{{ Auth::user()->email }}" name="email" value=""  disabled>
 </div>
</div>

<div class="form-row">
  <div class="form-group col-md-6">
    <label for="applicant_mobile">Applicant's Mobile Number</label>
    <input type="text" class="form-control" name="applicant_mobile" maxlength="11" placeholder="03xxxxxxxxx" value="{{old('applicant_mobile')}}"/>
  </div>

  <div class="form-group col-md-6">
    <label for="parent_mobile">Parent / Guardian's Mobile Number</label>
    <input type="text" class="form-control" name="parent_mobile" maxlength="11" placeholder="03xxxxxxxxx" value="{{old('parent_mobile')}}"/>
  </div>

</div>


<div class="form-row">
 <div class="form-group col-md-6">
 <label for="permenant_address">Permanent Address</label>
  <textarea class="form-control" rows="2" name="permenant_address" placeholder="Street No. ABC, House No. XYZ, Postal Code" >{{old('permenant_address')}}</textarea>
 </div>

 <div class="form-group col-md-6">
 <label for="postal_address">Postal Address</label>
  <textarea class="form-control" rows="2" name="postal_address" placeholder="Street No. ABC, House No. XYZ, Postal Code" >{{old('postal_address')}}</textarea>
 </div>
</div>



<div class="form-row">

<div class="form-group col-md-4">
<label for="country">Country</label>

<select class="form-control select2" id="country" name="country" style="width: 100%" value="{{old('country')}}">
       <option value="Pakistan" selected>Pakistan</option>
   </select>

</div>



 <div class="form-group col-md-4">
  <label for="domicile_province">Domicile Province</label>
 <select class="form-control select2" id="domicile_province" style="width: 100%" name="domicile_province" value="{{old('domicile_province')}}">
      <option disabled selected hidden>Choose...</option>
      <option>AJK</option>
      <option>Baluchistan</option>
      <option>FATA</option>
      <option>Gilgit Baltistan</option>
      <option>Islamabad</option>
      <option>KPK</option>
      <option>Punjab</option>
      <option>Sindh</option>
    </select>
 </div>



 <div class="form-group col-md-4">
  <label for="address_district">District </label>
   <select class="form-control select2" name="district" style="width: 100%" value="{{old('district')}}">
	  <option disabled selected hidden>Choose...</option>
          <option>Abbottabad</option>
	  <option>Attock</option>
	  <option>Awaran</option>
	  <option>Badin</option>
	  <option>Bagh</option>
	  <option>Bahawalnagar</option>
	  <option>Bahawalpur</option>
	  <option>Bajaur Agency</option>
	  <option>Baltistan</option>
	  <option>Bannu</option>
	  <option>Barkhan</option>
	  <option>Batagram</option>
	  <option>Bhakkar</option>
	  <option>Bhimber</option>
	  <option>Bolan</option>
	  <option>Bunner</option>
	  <option>Chagai</option>
	  <option>Chakwal</option>
	  <option>Charsadda</option>
	  <option>Chitral</option>
	  <option>D.G. Khan</option>
	  <option>D.I. Khan</option>
	  <option>Dadu</option>
	  <option>Dera Bughti</option>
	  <option>Diamir</option>
	  <option>Faisalabad</option>
	  <option>Ghanchee</option>
	  <option>Ghizer</option>
	  <option>Ghotki</option>
	  <option>Gilgit</option>
	  <option>Gujranwala</option>
	  <option>Gujrat</option>
	  <option>Gwadar</option>
	  <option>Hafizabad</option>
	  <option>Hangu</option>
	  <option>Haripur</option>
	  <option>Hyderabad</option>
	  <option>Jaffarabad</option>
	  <option>Jaccobabad</option>
	  <option>Jhal Magsi</option>
	  <option>Jhang</option>
	  <option>Jhelum</option>
	  <option>Kalat</option>
	  <option>Karachi Central</option>
	  <option>Karachi East</option>
	  <option>Karachi South</option>
	  <option>Karachi West</option>
	  <option>Karak</option>
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
	  <option>Kohat</option>
	  <option>Kohistan</option>
	  <option>Kohlu</option>
	  <option>Kotli</option>
	  <option>Kurram Agency</option>
	  <option>Lahore</option>
	  <option>Lakki Marwat</option>
	  <option>Larkana</option>
	  <option>Lasbela</option>
	  <option>Layyah</option>
	  <option>Lodhran</option>
	  <option>LoraLai</option>
	  <option>Lower Dir</option>
	  <option>Malakand</option>
	  <option>Mandi Bahauddin</option>
	  <option>Malir</option>
	  <option>Mansehra</option>
	  <option>Mardan</option>
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
	  <option>Sargodha</option>
	  <option>Shangla</option>
	  <option>Sheikhupura</option>
	  <option>Shikarpur</option>
	  <option>Sialkot</option>
	  <option>Sibi</option>
	  <option>Sourth Waziristan Agency</option>
	  <option>Sudhnoti</option>
	  <option>Sukkur</option>
	  <option>Swabi</option>
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
