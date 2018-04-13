window.addEventListener('DOMContentLoaded', function() {
  /* Elements */
  const headerMenu = document.getElementById('header-navigation-menu')
  const headerMenuLink = document.getElementById('header-navigation-menu-link')
  const headerMenuLabel = document.getElementById('header-menu-label')

  /* Media Queries */
  const mobileMediaQueryString = '(max-width: 800px)'

  /* Menu Functions */
  function openMenu() {
    headerMenu.style.display = 'block'
    headerMenuLabel.innerHTML = 'Close'
  }
  
  function closeMenu() {
    headerMenu.style.display = 'none'
    headerMenuLabel.innerHTML = 'Menu'
  }
  
  /*
   * Toggle header navigation menu visibility.
   */
  headerMenuLink.addEventListener('click', function() {
    if (headerMenu.style.display === 'block') closeMenu()
    else openMenu()
  })

  const desktop = window.matchMedia(mobileMediaQueryString)
  desktop.onchange = function(e) {
    if (e.matches) {
      //Set menu for mobile screen sizes.
      closeMenu()
      headerMenuLink.style.display = 'flex'
    } else {
      //Set menu for tablet/desktop screen sizes.
      headerMenu.style.display = 'block'
      headerMenuLink.style.display = 'none'
    }
  }
})