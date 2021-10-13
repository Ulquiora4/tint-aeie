function imageGallery() {
  // getting all the galleries
  const roomGalleries = document.querySelectorAll('.room-gallery')

  // looping over each gallery, and getting previews
  // and highlight img for each gallery
  roomGalleries.forEach((roomGallery) => {
    const mainImg = roomGallery.querySelector('.gallery-highlight')
    const previews = roomGallery.querySelectorAll('.room-preview img')

    // looping over each preview in a particular gallery
    previews.forEach((preview) => {
      preview.addEventListener('click', function () {
        const smallSrc = this.src
        const bigSrc = smallSrc.replace('small', 'big')

        previews.forEach((preview) => preview.classList.remove('room-active'))

        // replacing src of highlight
        mainImg.src = bigSrc
        preview.classList.add('room-active')
      })
    })
  })
}

imageGallery()
