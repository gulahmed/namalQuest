 <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title"><i class="fas fa-user-graduate"></i>&emsp;Intermediate</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-3">
                        <label for="titleInterQual">Title of Qualification</label>
                        <div class="form-group" >
                          <select id="selected-category" name="qualification"  class="form-control select2" style="width: 100%!important; " required  >
                            <option disabled selected hidden>Choose ...</option>
                            <option value="FSc: Pre-Engineering">FSc: Pre-Engineering</option>
                            <option value="FSc: Pre-Medical">FSc: Pre-Medical</option>
                            <option value="FSc: ICS">FSc: ICS with Math and Physics</option>
                            <option value="A-Level">'A'-Level</option>
                            <option value="DAE Holder">DAE Holder</option>
                            <option value="FA">FA</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="qualStatus">Qualification Status</label>
                        <div class="form-group" data-toggle="popover" title="Qualification Status" data-placement="top" data-trigger="hover" data-content="Choose 'In Progress', if you are waiting for last year result">
                          <select  name="result_awaiting" class="form-control select2" id="qualStatus" style="width: 100%!important;" onchange="statusSelector()" required>
                            <option disabled selected hidden>Choose ...</option>
                            <option value="0">Completed</option>
                            <option value="1">In progress</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="studyYears">Study Year (Passed)</label>
                        <div class="form-group" data-toggle="popover" title="Study Year Completed" data-placement="top" data-trigger="hover" data-content="Choose the study year, you have  passed">
                          <select class="form-control select2" id="studyYears" style="width: 100%!important;" required>
                            <option disabled selected hidden>Choose ...</option>
                            <option>1st Year</option>
                            <option>2nd Year</option>
                          </select>
                        </div>
                      </div>                      
                      <div class="col-md-3">
                        <label for="interBoard">Board / University</label>
                        <div class="form-group" >
                          <select name="board" class="form-control select2" style="width: 100%!important;" id="interBoard" required>
                            <option disabled selected hidden>Choose ...</option>
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
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="card bg-secondary text-white">
                          <div class="card-body"> 
                          &#9638 &nbsp;If your Intermediate\DAE\equivalent qualification is completed, please provide total marks.<br>
                          &#9638 &nbsp;If awaiting for Intermediate 2nd year result, please provide 1st year marks.<br>
                          &#9638 &nbsp;If awaiting for DAE 3rd year result, please provide total marks of completed two years.<br>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-3">
                        <label for="inter1rollnum">Roll Number</label>
                        <div class="form-group">
                          <div class="input-group" data-toggle="popover" title="Hint" data-placement="bottom" data-trigger="hover" data-content="Provide roll number of study year, you have passed">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-hashtag"></i>
                                </span>
                            </div>
                            <input name="roll_number" type="text" class="form-control" id="inter1rollnum" value="{{ old('roll_number') }}">
                          </div>
                        </div>
                      </div> 
                      <div class="col-sm-2">
                        <label for="inter1totalmarks">Total Marks</label>
                        <div class="form-group">
                          <div class="input-group" data-toggle="popover" title="Hint" data-placement="bottom" data-trigger="hover" data-content="Provide total marks of study year, you have passed" >
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-hashtag"></i>
                                </span>
                            </div>
                            <input name="total_marks" type="text" class="form-control" id="inter1totalmarks" value="{{ old('total_marks') }}">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <label for="inter1obtmarks">Obtained Marks</label>
                        <div class="form-group">
                          <div class="input-group" data-toggle="popover" title="Hint" data-placement="bottom" data-trigger="hover" data-content="Provide obtained marks out of 'Total Marks'">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-hashtag"></i>
                                </span>
                            </div>
                            <input name="obtained_marks" type="text" class="form-control" id="inter1obtmarks" value="{{ old('obtained_marks') }}">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <label for="inter1passyear">Passing Year</label>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                            <input name="year_of_passing" type="text" class="form-control" id="inter1passyear" value="{{ old('year_of_passing') }}">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <label for="inter2rollnum">Roll Number (Last Year)</label>
                        <div class="form-group">
                          <div class="input-group" data-toggle="popover" title="Hint" data-placement="bottom" data-trigger="hover" data-content="Provide roll number of final study year i.e. 2nd year (Intermediate), 3rd year (DAE)">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-hashtag"></i>
                                </span>
                            </div>
                            <input name="rollnumber" type="text" class="form-control" id="inter2rollnum">
                          </div>
                        </div>
                      </div>                      
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <label for="interSubj">Please mention the major subjects/technologies, you have studied in your intermediate:</label> 
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-book-open"></i></span>
                          </div>
                          <textarea class="form-control" rows="1" id="interSubj" placeholder="e.g. Math, Physics, Chemistry etc. DAE holders should only provide their major technology e.g. Mechanical Technology." name="subjects_studied">{{old('subjects_studied')}}</textarea>
                        </div>                                        
                      </div>
                    </div>
                  </div>
              
            
         

        
        </div><!-- /.container-fluid -->