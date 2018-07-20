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
                            <option  {{old('qualification', $education->qualification) =="Fsc: Pre-engineering" ? 'selected': ''}}  >FSc: Pre-Engineering</option>
                            <option {{old('qualification', $education->qualification) =="Fsc: Pre-medical" ? 'selected': ''}} >FSc: Pre-Medical</option>
                            <option {{old('qualification', $education->qualification) =="Fsc: Ics With Math And Physics" ? 'selected': ''}}  >FSc: ICS with Math and Physics  </option>
                            <option {{old('qualification', $education->qualification) =="A-level" ? 'selected': ''}}  >A-Level</option>
                            <option {{old('qualification', $education->qualification) =="Dae Holder" ? 'selected': ''}} >DAE Holder</option>
                            <option  {{old('qualification', $education->qualification) =="Fa" ? 'selected': ''}} >FA</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="qualStatus">Qualification Status</label>
                        <div class="form-group" data-toggle="popover" title="Qualification Status" data-placement="top" data-trigger="hover" data-content="Choose 'In Progress', if you are waiting for last year result">
                          <select  name="result_awaiting" class="form-control select2" id="qualStatus" style="width: 100%!important;" onchange="statusSelector()" required>
                            <option disabled selected hidden>Choose ...</option>
                            <option value="0"{{old('result_awaiting', $education->result_awaiting) =="0" ?'selected':'' }}>Completed</option>
                            <option value="1" {{old('result_awaiting', $education->result_awaiting) =="1" ? 'selected': ''}}>In progress</option>
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
                            <option {{old('board', $education->board) =="BISE, Abbottabad" ? 'selected': ''}} >BISE, Abbottabad</option>
                            <option {{old('board', $education->board) =="BISE, Bahawalpur" ? 'selected': ''}} >BISE, Bahawalpur</option>
                            <option {{old('board', $education->board) =="BISE, Bannu" ? 'selected': ''}} > BISE, Bannu</option>
                            <option {{old('board', $education->board) =="BISE, DG Khan" ? 'selected': ''}} > BISE, DG Khan</option>
                            <option {{old('board', $education->board) =="BISE, DI Khan" ? 'selected': ''}} >BISE, DI Khan</option>
                            <option {{old('board', $education->board) =="BISE, Faisalabad" ? 'selected': ''}} >BISE, Faisalabad</option>
                            <option {{old('board', $education->board) =="BISE, Gujranwala" ? 'selected': ''}} >BISE, Gujranwala</option>
                            <option {{old('board', $education->board) =="BISE, Hyderabad" ? 'selected': ''}} >BISE, Hyderabad</option>
                            <option {{old('board', $education->board) =="BISE, Kohat" ? 'selected': ''}} >BISE, Kohat</option>
                            <option {{old('board', $education->board) =="BISE, Lahore" ? 'selected': ''}}>BISE, Lahore</option>
                            <option {{old('board', $education->board) =="BISE, Larkana" ? 'selected': ''}}>BISE, Larkana</option>
                            <option {{old('board', $education->board) =="BISE, Malakand" ? 'selected': ''}}>BISE, Malakand</option>
                            <option {{old('board', $education->board) =="BISE, Mardan" ? 'selected': ''}}>BISE, Mardan</option>
                            <option {{old('board', $education->board) =="BISE, Mirpur Khas" ? 'selected': ''}}>BISE, Mirpur Khas</option>
                            <option {{old('board', $education->board) =="BISE, Multan" ? 'selected': ''}}>BISE, Multan</option>
                            <option {{old('board', $education->board) =="BISE, Peshawar" ? 'selected': ''}}>BISE, Peshawar</option>
                            <option {{old('board', $education->board) =="BISE, Quetta" ? 'selected': ''}}>BISE, Quetta</option>
                            <option {{old('board', $education->board) =="BISE, Rawalpindi" ? 'selected': ''}}>BISE, Rawalpindi</option>
                            <option {{old('board', $education->board) =="BISE, Sahiwal" ? 'selected': ''}} >BISE, Sahiwal</option>
                            <option {{old('board', $education->board) =="BISE, Sargodha" ? 'selected': ''}}>BISE, Sargodha</option>
                            <option {{old('board', $education->board) =="BISE, Swat" ? 'selected': ''}}>BISE, Swat</option>
                            <option {{old('board', $education->board) =="BISE, Turbat" ? 'selected': ''}}>BISE, Turbat</option>
                            <option {{old('board', $education->board) =="BISE, Zhob" ? 'selected': ''}}>BISE, Zhob</option>
                            <option {{old('board', $education->board) =="BISEn, Sukkur" ? 'selected': ''}}>BISEn, Sukkur</option>
                            <option {{old('board', $education->board) =="BSE, Karachi" ? 'selected': ''}}>BSE, Karachi</option>
                            <option {{old('board', $education->board) =="BIE, Karachi" ? 'selected': ''}}>BIE, Karachi</option>
                            <option {{old('board', $education->board) =="FBISE, Islamabad" ? 'selected': ''}}>FBISE, Islamabad</option>
                            <option {{old('board', $education->board) =="AJK BISE, Mirpur" ? 'selected': ''}}>AJK BISE, Mirpur</option>
                            <option {{old('board', $education->board) =="Gilgit Baltistan BISE Karakurum" ? 'selected': ''}}>Gilgit Baltistan BISE Karakurum</option>
                            <option {{old('board', $education->board) =="Punjab BTE, Lahore" ? 'selected': ''}}>Punjab BTE, Lahore</option>
                            <option {{old('board', $education->board) =="Khyber Pakhtunkhwa BTE, Peshawar" ? 'selected': ''}}>Khyber Pakhtunkhwa BTE, Peshawar</option>
                            <option {{old('board', $education->board) =="Sindh BTE, Karachi" ? 'selected': ''}}>Sindh BTE, Karachi</option>
                            <option {{old('board', $education->board) =="Baluchistan TEB, Quetta" ? 'selected': ''}}>Baluchistan TEB, Quetta</option>
                            <option {{old('board', $education->board) =="Cambridge IGCSE" ? 'selected': ''}}>Cambridge IGCSE</option>
                            <option {{old('board', $education->board) =="Pearson Edexcel GCSEs" ? 'selected': ''}}>Pearson Edexcel GCSEs</option>
                            <option {{old('board', $education->board) =="Other" ? 'selected': ''}}>Other</option>
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
                            <input name="roll_number" type="text" class="form-control" id="inter1rollnum" value="{{ old('roll_number', $education->roll_number) }}" required>
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
                            </div>,
                            <input name="total_marks" type="text" class="form-control" id="inter1totalmarks" value="{{ old('total_marks',$education->total_marks) }}" required>
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
                            <input name="obtained_marks" type="text" class="form-control" id="inter1obtmarks" value="{{ old('obtained_marks',$education->obtained_marks) }}" required>
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
                            <input name="year_of_passing" type="text" class="form-control" id="inter1passyear" value="{{ old('year_of_passing',$education->year_of_passing) }}" required>
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
                            <input name="rollnumber" type="text" class="form-control" id="inter2rollnum" value="{{ old('rollnumber',$education->rollnumber) }}" required>
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
                          <textarea class="form-control" rows="1" id="interSubj" placeholder="e.g. Math, Physics, Chemistry etc. DAE holders should only provide their major technology e.g. Mechanical Technology." name="subjects_studied">{{old('subjects_studied', $education->subjects_studied)}}</textarea>
                        </div>                                        
                      </div>
                    </div>
                  </div>
              
            
         

        
        </div><!-- /.container-fluid -->