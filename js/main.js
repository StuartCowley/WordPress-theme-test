function jump(position) {
	document.getElementById("scrollwrap").scrollTo({
		top: document.getElementById(position).offsetTop,
		behavior: 'smooth'
	});
}

// Initialise, allowing time for DOM to be created
let tabBoxes;
let currentTab;
let featuredText;
let metaPanels;
let backgroundImages;

setTimeout(() => {
	tabBoxes = document.querySelectorAll('.main-content__tab-box');
	currentTab = document.getElementById('About MCG');
	featuredText = document.querySelectorAll('.main-content__featured-text');
	metaPanels = document.querySelectorAll('.main-content__panel-meta');
	backgroundImages = document.querySelectorAll('.main-content__background-image-wrap');

	tabBoxes[0].classList.add('main-content__tab-box--active')
	metaPanels[0].classList.add('main-content__panel-meta--active')
	featuredText[0].classList.add('main-content__featured-text--active')
	featuredText[1].classList.add('main-content__featured-text--active')
	backgroundImages[0].classList.add('main-content__background-image-wrap--active')
}, 100);


const changeActiveTab = (newVal) => {
	if (currentTab !== newVal) {
		// Tab boxes
		for (var i=0; i<tabBoxes.length; i++) {
			tabBoxes[i].classList.remove('main-content__tab-box--active');
		}
		const tabId = `${newVal}__tab`;
		document.getElementById(tabId).classList.add('main-content__tab-box--active');

		// Meta boxes
		for (var i=0; i<metaPanels.length; i++) {
			metaPanels[i].classList.remove('main-content__panel-meta--active');
		}
		const metaId = `${newVal}__meta`;
		document.getElementById(metaId).classList.add('main-content__panel-meta--active')

		// Featured text
		for (var i=0; i<featuredText.length; i++) {
			featuredText[i].classList.remove('main-content__featured-text--active');
		}
		const topFeaturedId = `${newVal}__featured--top`;
		const bottomFeaturedId = `${newVal}__featured--bottom`;
		document.getElementById(topFeaturedId).classList.add('main-content__featured-text--active')
		document.getElementById(bottomFeaturedId).classList.add('main-content__featured-text--active')

		// Background Image
		for (var i=0; i<backgroundImages.length; i++) {
			backgroundImages[i].classList.remove('main-content__background-image-wrap--active');
		}
		const bgImg = `${newVal}__bgImg`;
		document.getElementById(bgImg).classList.add('main-content__background-image-wrap--active')

		// Update current tab
		currentTab = newVal
	}
}

setTimeout(() => {
	const container = document.getElementById('scrollwrap');

	container.addEventListener('scroll', function() {
		const postHeight = container.clientHeight;
		const position = container.scrollTop;

		if (position < (postHeight*0.25)) {
			changeActiveTab('About MCG')
		} else if (position < (postHeight*1.25)) {
			changeActiveTab('Our brands')
		} else {
			changeActiveTab('Explore careers')
		}
	}, false);
}, 80);
