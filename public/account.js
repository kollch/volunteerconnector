function handlepostClick(event){
	var NewModal = document.getElementById('add-event-modal-backdrop');
	NewModal.classList.remove('hidden');
	NewModal = document.getElementById('add-event-modal');
	NewModal.classList.remove('hidden');
}

function handleCancelPostClick(event){
	var NewModal = document.getElementById('add-event-modal-backdrop');
	NewModal.classList.add('hidden');
	var formNewform = document.getElementById('add-event-modal');
	formNewform.classList.add('hidden');
}

var postButton = document.getElementById('post-button');
postButton.addEventListener('click', handlepostClick);

var  modalCancelClick = document.getElementById('modal-cancel');
modalCancelClick.addEventListener('click', handleCancelPostClick);
