localStorage.setItem('isCollapsed', true)

function toggle() {
    const navbar = document.querySelector('#navbar')
    const isCollapsed = JSON.parse(localStorage.getItem('isCollapsed'))

    if (isCollapsed === true) {
        navbar.style = 'left: 0'
    } else {
        navbar.style = ''
    }
    localStorage.setItem('isCollapsed', !isCollapsed)
}
