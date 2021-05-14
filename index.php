<table>
<thead>
    <tr>
      <th>First name</th>
      <th>Last name</th>
      <th>Job title</th>
    </tr>
</thead>


    <tbody id="data"></tbody>
</table>

<script>
window.onload = function () {
  let counter = 0;
  setInterval(function () {
    counter++;
    // console.log(counter);

    var ajax = new XMLHttpRequest();
  ajax.open("GET", "data.php", true);
  ajax.send();

  ajax.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var data = JSON.parse(this.responseText);
      // console.log(data);

      var html = "";
      for(i = 0; i < data.length; i++) {
        var firstName = data[i].firstName;
        var lastName = data[i].lastName;
        var jobTitle = data[i].jobTitle;

        html += "<tr>";
          html += "<td>" + firstName + "</td>";
          html += "<td>" + lastName + "</td>";
          html += "<td>" + jobTitle + "</td>";
        html += "</tr>";
      }

        document.getElementById("data").innerHTML = html;
    }
  };
  }, 100);
}
  
</script>

<style>
body {
  color: white;
  background: black;
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table td, table th {
  border: 1px solid #555;
  padding: 8px;
}

table tr:nth-child(even){background-color: #222;}

/* table tr:hover {background-color: #ddd;} */

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #2054bd;
  color: white;
}

* {
  user-select: none;
}
</style>