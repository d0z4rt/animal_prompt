const openForm = () => {
  document.querySelector('#form').style.display = 'flex'
  document.querySelector('#add').style.display = 'none'
}

const closeForm = () => {
  document.querySelector('#form').style.display = 'none'
  document.querySelector('#add').style.display = 'flex'
}
