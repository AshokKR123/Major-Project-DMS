<?php require 'LoginHeader.php'?>
<div class="card container-fluid">
    <div style="background-color: white;" class="row p-2">
    	<style>
.button {
  background-color: #4CAF50;
  border: white;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
 <form style=" border: 2px dotted red;">
 <label style="font-size=6;">MTA,AOH,PM,OR CM CHECKS DEFICIENCY ?</label>
 <input type="radio" name="boolean" value="Yes">
  <label>Yes</label>
  <input type="radio" name="boolean" value="No">
  <label>No</label>
 &emsp;
<select id="selnat" name="Select Nature of Work">
<option value="1">Select Nature of Work</option>
<option value="2">APPROVAL REQURIRED</option>
</select>
<br>
<br>
<br>
<br>
<br>

<label>MAINTENANCE AGENCY:</label>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<label>LOCATION/SYSTEM:</label>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<label>EQUIPMENT NAME:</label><br><br>
<select id="selma" name="Select Maintenance Agency">
<option value="1">Select Maintenance Agency</option>
<option value="2">APPROVAL REQURIRED</option>
</select>
&emsp;
&emsp;
&emsp;&emsp;
&emsp;

<select id="selloc" name="Select Location/System">
<option value="1">Select Location/System</option>
<option value="2">APPROVAL REQURIRED</option>
</select>
&emsp;
&emsp;
&emsp;&emsp;
&emsp;

<select id="seleqp" name="Select Equipment Name">
<option value="1">Select Equipment Name</option>
<option value="2">APPROVAL REQURIRED</option>
</select>
<br>
<br>
<br>
<br>
<br>
<br>

<label>DESCRIPTION OF DEFICIENCY:(SELF-CONTAINED OF TOTAL DEFICIENCY AND NO JOB PLANNING DETAILS)</label><br><br>
<input type="text"  name="entdef" placeholder="enter total deficiency details except job planning (Do Not Enter like 'SWP may be Issued')" size="80" height="48"/>
<br>
<br>
<br>
<br>
<br>
<br>

<label>MAINTENANCE JOB PLANNING DETAILS & REMARKS:(OPTIONAL)</label><br><br>
<input type="text" name="mjp" placeholder="Enter Maintenance Job planning details & Remarks" size="60"/>
&emsp;&emsp;

<button class="button"><i class="fa fa-save"></i>&ensp;SAVE DEFICIENCY DETAILS </button>
</form>
    </div>
</div>
<div class="container-fluid mt-3">
	<div class="row">
		
	</div>
</div>
<?php require 'LoginFooter.php'?>