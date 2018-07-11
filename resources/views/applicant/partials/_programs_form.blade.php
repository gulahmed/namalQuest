
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Programs Offered</label>
                          <p align="justify">
                            &nbsp;&#9638 &emsp;BBA<br>
                            &nbsp;&#9638 &emsp;BSc Computer Science<br>
                            &nbsp;&#9638 &emsp;BSc Electrical Engineering</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <label for="firstpref">First Preference</label>
                        <div class="form-group">
                          <select id="firstpref" class="form-control select2" name="program_pref[]" style="width: 100%;" required>
                            <option disabled selected hidden>Choose ...</option>
                            <option>BBA</option>
                            <option>BSc Computer Science</option>
                            <option>BSc Electrical Engineering</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <label for="secondpref">Second Preference</label>
                        <div class="form-group">
                          <select id="secondpref" class="form-control select2" name="program_pref[]" style="width: 100%; " required>
                            <option disabled selected hidden>Choose ...</option>
                            <option>BBA</option>
                            <option>BSc Computer Science</option>
                            <option>BSc Electrical Engineering</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>

<span class="i-need-space"></span>
<!-- TEST DETAILS-->

          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
        	<h3>Test Details</h3>
              <div class="card card-primary">

                <!-- /.card-header -->
                <!-- form start -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <label for="punjabtest">Test Name (Punjab Domiciled)</label>
                        <div class="card bg-dark text-white">
                          <div class="card-body">
                          &#9638 &nbsp;For BSc Electrical Engineering \ BSc Computer Science, only combined Entry Test 2018 coducted by UET Lahore is accepted.<br>
                          &#9638 &nbsp;For BBA, either NAT-I 2018 (conducted by NTS) <strong>OR</strong> Combined Entry Test 2018 (conducted by UET Lahore) is accepted.<br>
                          </div>
                        </div>

                        <div class="form-group">
                          <select class="form-control select2" name="test_name_punjab" @if (!empty($domicile->domicile_province) && $domicile->domicile_province != 'Punjab') disabled @endif style="width: 100%" id="dompunjab">
                            <option disabled selected hidden>Choose ...</option>
                            <option value="NAT-I">NAT-I 2018(NTS) (For BBA Only) (100 Marks)</option>
                            <option value="UET Lahore">UET Lahore Combined Entry Test 2018 (400 Marks)</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="nonpunjabtest">Test Name (Non-Punjab Domiciled)</label>
                        <div class="card bg-dark text-white">
                          <div class="card-body">
                          For BSc Electrical Engineering \ BSc Computer Science \ BBA, following tests are accepted:<br>
                          &#9638 &nbsp;NAT-I 2018 (conducted by NTS)<br> &emsp;<strong>OR</strong><br>
                          &#9638 &nbsp;Test conducted by any public sector Engineering University<br>
                          </div>
                        </div>

                        <div class="form-group">
                          <select class="form-control select2" name="test_name_non_punjab" style="width: 100%" id="domnonpunjab" @if (!empty($domicile->domicile_province)&& $domicile->domicile_province == 'Punjab') disabled @endif  onchange="nonpunjabtester()">
                            <option disabled selected hidden>Choose ...</option>
                            <option value="NAT-I">NAT-I 2018 (NTS) (100 Marks)</option>
                            <option value="UET Lahore">UET Lahore Combined Entry Test 2018 (400 Marks)</option>
                            <option value="UET Peshawar">UET Peshawar Test 2018 (800 Marks)</option>
                            <option value="NED Karachi">NED UET Karachi Test 2018 (100 Marks)</option>
                            <option value="Mehran Jamshoro">Mehran UET Jamshoro Test 2018 (100 Marks)</option>
                            <option value="Balochistan UET">Balochistan UET Khuzdar Test 2018 (120 Marks)</option>
                            <option value="Enter test name ...">Other</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6"></div>
                      <div class="col-md-6">
                        <label for="othertestname">Other Test</label>
                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control" id="othertestname" disabled placeholder="Enter test name ...">
                          </div>
                        </div>
                      </div>
                    </div>


		  <div class="form-row">
		      <div class=" col-md-6">
		      <label for="testrollnum">Test Roll Number</label>
		      <div class="form-group">
			<div class="input-group">
			  <input type="text" class="form-control" name="test_roll_number" id="testrollnum" placeholder="Enter Test roll number ">
			</div>
		      </div>
		    </div>

		    <div class=" col-md-6">
		      <label for="testrollnum">Test obtained Markes</label>
		      <div class="form-group">
			<div class="input-group">
			  <input type="text" class="form-control" name="test_obtained_marks" id="testrollnum" placeholder="Test Obtained Marks ...">
			</div>
		      </div>
		    </div>
		  </div>
      </div>
  </div>
</div>
</div>
