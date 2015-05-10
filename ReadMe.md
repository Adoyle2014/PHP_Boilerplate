#PHP Boilerplate \- with Bootstrap and CKeditor 
---

## File structure
<table>
<thead>
<tr>
	<th>Root</th>
	<th>level 1</th>
	<th>level 2</th>
	<th>level 3</th>
</tr>
</thead>
<tbody>
<tr>
	<td>-</td>
	<td>config</td>
	<td>config.php</td>
</tr>
<tr>
	<td>-</td>
	<td>core</td>
	<td>init.php</td>
</tr>
<tr>
	<td>-</td>
	<td>helpers</td>
	<td>db_helper.php</td>
</tr>
<tr>
	<td>-</td>
	<td>-</td>
	<td>format_helper.php</td>
</tr>
<tr>
	<td>-</td>
	<td>-</td>
	<td>system_helper.php</td>
</tr>
<tr>
	<td>-</td>
	<td>images</td>
	<td>-</td>
</tr>
<tr>
	<td>-</td>
	<td>libraries</td>
	<td>Database.php</td>
</tr>
<tr>
	<td>-</td>
	<td>-</td>
	<td>Template.php</td>
</tr>
<tr>
	<td>-</td>
	<td>-</td>
	<td>Validator.php</td>
</tr>
<tr>
	<td>-</td>
	<td>templates</td>
	<td>css</td>
	<td>bootstrap.css</td>
</tr>
<tr>
	<td>-</td>
	<td>-</td>
	<td>-</td>
	<td>custom.css</td>
</tr>
<tr>
	<td>-</td>
	<td>-</td>
	<td>includes</td>
	<td>footer.php</td>
</tr>
<tr>
	<td>-</td>
	<td>-</td>
	<td>-</td>
	<td>header.php</td>
</tr>
<tr>
	<td>-</td>
	<td>-</td>
	<td>js</td>
	<td>CKeditor</td>
</tr>
<tr>
	<td>-</td>
	<td>-</td>
	<td>-</td>
	<td>bootstrap.js</td>
</tr>
<tr>
	<td>-</td>
	<td>-</td>
	<td>-</td>
	<td>npm.js</td>
</tr>
<tr>
	<td>-</td>
	<td>-</td>
	<td>index.php</td>	
</tr>
<tr>
	<td>-</td>
	<td>html</td>
	<td>css</td>
	<td>bootstrap.css</td>
</tr>
<tr>
	<td>-</td>
	<td>-</td>
	<td>-</td>
	<td>custom.css</td>
</tr>
<tr>
	<td>-</td>
	<td>-</td>
	<td>images</td>
</tr>
<tr>
	<td>-</td>
	<td>-</td>
	<td>js</td>
	<td>CKeditor</td>
</tr>
<tr>
	<td>-</td>
	<td>-</td>
	<td>-</td>
	<td>bootstrap.js</td>
</tr>
<tr>
	<td>-</td>
	<td>-</td>
	<td>-</td>
	<td>npm.js</td>
</tr>
<tr>
	<td>-</td>
	<td>-</td>
	<td>index.php</td>
	
</tr>
<tr>
	<td>-</td>
	<td>index.php</td>	
</tr>
</tbody>
</table>
  
##File Usage  
###config.php  
Used to define super global variables and paths.  
  
###init.php
Holds session_start(), includes for helper files and autoload for classes.  

###Helper files  
Holds helper functions called from templates.  

###libraries  
This folder holds the Classes for your project which act as MODELs.  

###templates folder
This is the VIEWs folder.  All HTML goes here in DRY format.  

###html folder  
This is your HTML mockup folder.  Do all of your mockup work here and then copy and paste into the views and includes.  

###root files
These are the CONTROLLER files.  They require the init.php file, instantiate your class objects, assign template variables and display the template.















