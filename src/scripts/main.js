const openMenu = () => {
  document.querySelector('#menu').style.display = 'flex'
}

const openForm = () => {
  document.querySelector('#form').style.display = 'flex'
  document.querySelector('#add').style.display = 'none'
}

const closeForm = () => {
  document.querySelector('#form').style.display = 'none'
  document.querySelector('#add').style.display = 'flex'
}

const openWtf = () => {
  document.querySelector('#wtf').style.display = 'flex'
}

const closeWtf = () => {
  document.querySelector('#wtf').style.display = 'none'
}
