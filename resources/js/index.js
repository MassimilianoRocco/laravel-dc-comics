const emblaNode = document.querySelector('.embla')
const options = { loop: false }
const emblaApi = EmblaCarousel(emblaNode, options)

const viewportNode = emblaNode.querySelector('.embla__viewport')

// Grab button nodes
const prevButtonNode = emblaNode.querySelector('.embla__prev')
const nextButtonNode = emblaNode.querySelector('.embla__next')

const embla = EmblaCarousel(viewportNode)
prevButtonNode.addEventListener('click', embla.scrollPrev, false)
nextButtonNode.addEventListener('click', embla.scrollNext, false)