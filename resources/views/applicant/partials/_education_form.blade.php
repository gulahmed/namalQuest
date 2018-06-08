<div class="card bg-light">
<div class="card-body">
  <form method="post" action="{{url('apply/education')}}" class="form">
    {{csrf_field()}}
    <div class="form-group"><input type="text" class="form-control" name="institute" maxlength="30" placeholder="Institute/School/College Name" value="{{ old('institute') }}"/></div>
    <div class="form-group">
      <select class="form-control select2" name="qualification" >
                        <option value="Matric">Matric</option>
                        <option value="FSc: Pre-Engineering">FSc: Pre-Engineering</option>
                        <option value="FSc: Pre-Medical">FSc: Pre-Medical</option>
                        <option value="FSc: ICS with Math and Physics">FSc: ICS with Math and Physics</option>
                        <option value="DAE Holder">DAE Holder</option>
                        <option value="FA">FA</option>
    </select>

    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
             <select class="form-control" name="result_awaiting" id="result_status">
                  <option value="">Select Result Status</option>
                  <option value="0">Waiting</option>
                  <option value="1">Declared</option>
              </select>
    </div>

    <div class="form-group col-md-6">
      <select class="form-control select2" name="board">
                        <option>BISE, Abbottabad</option>
                        <option>BISE, Bahawalpur</option>
                        <option>BISE, Bannu</option>
                        <option>BISE, DG Khan</option>
                        <option>BISE, DI Khan</option>
                        <option>BISE, Faisalabad</option>
                        <option>BISE, Gujranwala</option>
                        <option>BISE, Hyderabad</option>
                        <option>BISE, Kohat</option>
                        <option>BISE, Lahore</option>
                        <option>BISE, Larkana</option>
                        <option>BISE, Malakand</option>
                        <option>BISE, Mardan</option>
                        <option>BISE, Mirpur Khas</option>
                        <option>BISE, Multan</option>
                        <option>BISE, Peshawar</option>
                        <option>BISE, Quetta</option>
                        <option>BISE, Rawalpindi</option>
                        <option>BISE, Sahiwal</option>
                        <option>BISE, Sargodha</option>
                        <option>BISE, Swat</option>
                        <option>BISE, Turbat</option>
                        <option>BISE, Zhob</option>
                        <option>BISEn, Sukkur</option>
                        <option>BSE, Karachi</option>
                        <option>BIE, Karachi</option>
                        <option>FBISE, Islamabad</option>
                        <option>AJK BISE, Mirpur</option>
                        <option>Gilgit Baltistan BISE Karakurum</option>
                        <option>Punjab BTE, Lahore</option>
                        <option>Khyber Pakhtunkhwa BTE, Peshawar</option>
                        <option>Sindh BTE, Karachi</option>
                        <option>Baluchistan TEB, Quetta</option>
                        <option>Cambridge IGCSE</option>
                        <option>Pearson Edexcel GCSEs</option>
                        <option>Other</option>
                      </select>


    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6 ">
      <input type="text" class="form-control" name="year_of_passing" placeholder="Passing year" value="{{ old('year_of_passing') }}">
    </div>

    <div class="form-group col-md-6 ">
      <input type="text" class="form-control" name="roll_number" placeholder="Roll Number " value="{{ old('roll_number') }}">
    </div>
</div>

<div class="form-row  ">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="total_marks" id="total_marks" placeholder="Total Marks " value="{{ old('total_marks') }}">
    </div>

    <div class="form-group col-md-6 ">
      <input type="text" class="form-control" name="obtained_marks" placeholder="Obtained Marks" value="{{ old('obtained_marks') }}"/>
    </div>
</div>
  <div class="form-group ">
   <input type="text" class="form-control" name= "subjects_studied" id="subjects_studied" placeholder="Subjects studied (e.g. Maths, Physics) " value="{{ old('roll_number') }}">
 </div>

 <div class="form-group"><button type="submit" class="btn btn-primary">Save / Add</button></div>
 </form>

</div>

</div>
