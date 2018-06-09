

<div class="row">
  <div class="col-sm-">
    <div class="card">
      <div class="card-header">
        Programs Offered
      </div>
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">BSc Computer Science</li>
          <li class="list-group-item">BSc Electrical Engineering</li>
          <li class="list-group-item">Bachelors in Business Administration</li>
        </ul>

      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <label for="firstpref">First Preference</label>
        <div class="form-group">
          <select class="form-control select2" name="program_pref[]">
            <option value="BSc Computer Science">BSc Computer Science</option>
            <option value="BSc Electrical Engineering" >BSc Electrical Engineering</option>
            <option value="BBA">BBA</option>
          </select>
        </div>

        <label for="secondpref">Second Preference</label>
        <div class="form-group">
          <select  class="form-control select2" name="program_pref[]">

            <option value="BSc Computer Science">BSc Computer Science</option>
            <option value="BSc Electrical Engineering" >BSc Electrical Engineering</option>
            <option value="BBA">BBA</option>
          </select>


      </div>
    </div>
  </div>
</div>
</div>

<span class="i-need-space"></span>

<!-- TEST DETAILS-->

<div class="card content-card">
  <div class="card-body">
    <h3>Test Details</h3>

    <div class="row">
                  <div class="col-md-6">
                    <label for="punjabtest"><span style="font-weight: bold">For Punjab Domiciled </span></label>
                    <p align="justify">
                      &#9638 &nbsp;For BSc Electrical Engineering \ BSc Computer Science, only combined Entry Test 2018 coducted by UET Lahore is accepted.<br>
                      &#9638 &nbsp;For BBA, either NAT-I 2018 (conducted by NTS) <strong>OR</strong> Combined Entry Test 2018 (conducted by UET Lahore) is accepted.
                    </p>
                    <div class="form-group">
                      <select class="form-control select2" id="dompunjab" name="punjab_test">
                        <option value="NAT-I 2018(NTS) (For BBA Only) (100 Marks)">NAT-I 2018(NTS) (For BBA Only) (100 Marks)</option>
                        <option value="UET Lahore Combined Entry Test 2018 (400 Marks)">UET Lahore Combined Entry Test 2018 (400 Marks)</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="nonpunjabtest"><span style="font-weight: bold">For Non-Punjab Domiciled</span></label>
                    <p align="justify">
                      &#9638 For BSc Electrical Engineering \ BSc Computer Science \ BBA, following tests are accepted:<br>
                      &#9638 &nbsp;NAT-I 2018 (conducted by NTS) &emsp;<strong>OR</strong> <br>
                      &#9638 &nbsp;Test conducted by any public sector Engineering University<br>
                    </p>
                    <div class="form-group">
                      <select class="form-control select2" name="non_punjab_test" id="domnonpunjab">
                        <option value="NAT-I 2018 (NTS) (100 Marks)">NAT-I 2018 (NTS) (100 Marks)</option>
                        <option value="UET Lahore Combined Entry Test 2018 (400 Marks)">UET Lahore Combined Entry Test 2018 (400 Marks)</option>
                        <option value="UET Peshawar Test 2018 (800 Marks)">UET Peshawar Test 2018 (800 Marks)</option>
                        <option value="NED UET Karachi Test 2018 (100 Marks)">NED UET Karachi Test 2018 (100 Marks)</option>
                        <option value="Mehran UET Jamshoro Test 2018 (100 Marks)">Mehran UET Jamshoro Test 2018 (100 Marks)</option>
                        <option value="Balochistan UET Khuzdar Test 2018 (120 Marks)">Balochistan UET Khuzdar Test 2018 (120 Marks)</option>
                      </select>
                    </div>
                  </div>
                </div>




  </div>

  <div class="form-row  ">
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
          <input type="text" class="form-control" name="test_obtained_marks" id="testrollnum" placeholder="Enter roll number ...">
        </div>
      </div>
    </div>


  </div>

  </div>
