<!-- jsGrid -->
<script src="plugins/jsgrid/demos/db.js"></script>
<script src="plugins/jsgrid/jsgrid.min.js"></script>
<script>
  $(function () {
    $("#jsGrid1").jsGrid({
        height: "100%",
        width: "100%",
        inserting:true,
        sorting: true,
        paging: true,
 
        data: db.clients,
 
        fields: [
            { name: "Name", type: "text", width: 150 },
            { name: "Age", type: "number", width: 50 },
            { name: "Address", type: "text", width: 200 },
            { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
            { name: "Married", type: "checkbox", title: "Is Married" }
        ]
    });
  });
</script>