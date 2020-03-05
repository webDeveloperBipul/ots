

<script>
var stateObject = {
"Animals & Pet Supplies": { "Live Animals": ["Bird Supplies", "Bird Cage Accessories"],
"Pet Supplies": ["Cat Supplies", "Palakkad"],
"Bird Supplies": ["Bird Toys", "Bird Treats"],
"bipul Supplies": ["fatema", "srity"],
},
"পোশাক ও আনুষাঙ্গিক": {
"পোশাক": ["ইউনিফর্ম", "স্কুলের পোশাক", "ক্রীড়া ইউনিফর্ম","ক্রিকেট ইউনিফর্ম","বিবাহের পোশাক"],
"Victoria": ["Altona", "Euroa"]
}, "Canada": {
"Alberta": ["Acadia", "Bighorn"],
"Columbia": ["Washington", ""]
},
}
window.onload = function () {
var catagory = document.getElementById("catagory"),
sub_catagory = document.getElementById("sub_catagory"),
sub_sub_catagory = document.getElementById("sub_sub_catagory");
for (var country in stateObject) {
catagory.options[catagory.options.length] = new Option(country, country);
}
catagory.onchange = function () {
sub_catagory.length = 1; // remove all options bar first
sub_sub_catagory.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
for (var state in stateObject[this.value]) {
sub_catagory.options[sub_catagory.options.length] = new Option(state, state);
}
}
catagory.onchange(); // reset in case page is reloaded
sub_catagory.onchange = function () {
sub_sub_catagory.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
var district = stateObject[catagory.value][this.value];
for (var i = 0; i < district.length; i++) {
sub_sub_catagory.options[sub_sub_catagory.options.length] = new Option(district[i], district[i]);
}
}
}


</script>