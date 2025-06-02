<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gaming-Board</title>
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstap4.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/custome.css">
</head>
<style>
	.input100 p{
		margin-bottom:15px ;
		height: 20px;
		background-color: #262626;
	}

details {
	position: relative;
	width: 100%;
	margin-right: 1rem;
}

details[open] {
	z-index: 1;
}

summary {
	padding: 1rem;
	cursor: pointer;
	border-radius: 5px;
	background-color: #ddd;
	list-style: none;
}

summary::-webkit-details-marker {
	display: none;
}

details[open] summary:before {
	content: '';
	display: block;
	width: 100vw;
	height: 100vh;
	background: transparent;
	position: fixed;
	top: 0;
	left: 0;
}

summary:after {
	content: '';
	display: inline-block;
	float: right;
	width: .5rem;
	height: .5rem;
	border-bottom: 1px solid currentColor;
	border-left: 1px solid currentColor;
	border-bottom-left-radius: 2px;
	transform: rotate(45deg) translate(50%, 0%);
	transform-origin: center center;
	transition: transform ease-in-out 100ms
}

summary:focus {
	outline: none;
}

details[open] summary:after {
	transform: rotate(-45deg) translate(0%, 0%);
}

ul {
	width: 100%;
	background: rgb(18, 58, 86);
	position: absolute;
	top: calc(100% + .5rem);
	left: 0;
	padding: 1rem;
	margin: 0;
	box-sizing: border-box;
	border-radius: 5px;
	max-height: 200px;
	overflow-y: auto;
}

li {
	margin: 0;
	padding: 1rem 0;
	border-bottom: 1px solid rgba(204, 204, 204, 0.563);
}

li:first-child {
	padding-top: 0;
}
li:last-child {
	padding-bottom: 0;
	border-bottom: none;
}

/* FAKE SELECT */

summary.radios {
	counter-reset: radios;
}

summary.radios:before {
	content: var(--selection);
}

input[type=radio] {
	counter-increment: radios;
	appearance: none;
	display: none;
}

input[type=radio]:checked {
	display: inline;
	--display: block;
}

input[type=radio]:after {
	content: attr(title);
	display: inline;
	font-size: 1rem;
}

ul.list {
	counter-reset: labels;
}

label {
	width: 100%;
	display: flex;
	cursor: pointer;
	color: white;
	justify-content: space-between;
}
label span {
	--display: none;
	display: var(--display);
	width: 1rem;
	height: 1rem;
	border: 1px solid #727272;
	border-radius: 3px;
}
</style>

<body>
	<div class="limiter">
		<div class="container-login100 bg1">
			<div class="wrap-login100">
			<form class="login100-form validate-form p-l-55 p-r-55 p-t-160" method="POST" action="{{route('saveRole') }}">
    @csrf <!-- Add CSRF token for Laravel -->
    <span class="login100-form-title">
        Welcome Team 04!
    </span>
    <div>
        <span class="admintitle"><b>Glad to see y'll here</b></span>
    </div>
    <div class="" style="margin-bottom:150px ;">
        <details class="custom-select">
            <summary class="radios">
                <input type="radio" name="item" id="default" title="choose" checked>
                <input type="radio" name="item" id="item1" title="Role 1">
                <input type="radio" name="item" id="item2" title="Role 2">
                <input type="radio" name="item" id="item3" title="Role 3">
            </summary>
            <ul class="list">
                <li>
                    <label for="item1">Role 1</label>
                </li>
                <li>
                    <label for="item2">Role 2</label>
                </li>
                <li>
                    <label for="item3">Role 3</label>
                </li>
            </ul>
        </details>
    </div>

    <div class="flex-col-c p-t-50 p-b-40">
        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn tdn" id="continueButton" disabled>
                Continue
            </button>
        </div>
    </div>
    <input type="hidden" name="selected_role" id="selectedRole">
    <input type="hidden" name="auth" id="{{Auth::id()}}"  value="{{Auth::id()}}">
</form>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

<script>
    const radioButtons = document.querySelectorAll('input[type="radio"]');
    const continueButton = document.getElementById('continueButton');
    const selectedRoleInput = document.getElementById('selectedRole');

    radioButtons.forEach((radio) => {
        radio.addEventListener('change', () => {
            selectedRoleInput.value = radio.id;
            continueButton.disabled = false;
        });
    });
</script>


</body>

</html>