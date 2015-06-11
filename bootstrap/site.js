function addhtml1(i){
	var tr=$('<tr>');
	var td1=$('<td>');
	var td2=$('<td>');
	td1.text("座位总数:");
	td2.text("39");
	tr.html(td1);
	tr.append(td2);
	$('.table').html(tr);

	var tr=$('<tr>');
	var td1=$('<td>');
	var td2=$('<td>');
	td1.text("剩余空座:");

	td2.text(i);
	tr.html(td1);
	tr.append(td2);
	$('.table').append(tr);

	var tr=$('<tr>');
	var td1=$('<td>');
	var td2=$('<td>');
	td1.text("有电源的座位总数:");
	td2.text("5");
	tr.html(td1);
	tr.append(td2);
	$('.table').append(tr);
}

function addhtml2(){
	var tr=$('<tr>');
	var td1=$('<td>');
	var td2=$('<td>');
	td1.text("座位总数:");
	td2.text("200");
	tr.html(td1);
	tr.append(td2);
	$('.table').html(tr);

	var tr=$('<tr>');
	var td1=$('<td>');
	var td2=$('<td>');
	td1.text("剩余空座:");
	td2.text("30");
	tr.html(td1);
	tr.append(td2);
	$('.table').append(tr);

	var tr=$('<tr>');
	var td1=$('<td>');
	var td2=$('<td>');
	td1.text("有电源的座位总数:");
	td2.text("2");
	tr.html(td1);
	tr.append(td2);
	$('.table').append(tr);
}
$(".btn").click(function (){
			if($('#dep_id').val()==1)addhtml1(34);
			else addhtml2();
});

$('.btn').click();


