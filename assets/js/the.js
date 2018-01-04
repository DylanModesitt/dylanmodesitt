

// Colorize the footer

var h=Math.random(),s=0.5,v=0.98,
golden_ratio_conjugate=0.618033988749895
,f,p,q,t,r,g,b;

// subsequent calls to rand() follow a more uniform distribution with fibonacci hashing

h+=golden_ratio_conjugate;
h%=1;

// convert from h,s,v to r,g,b

i = Math.floor(h * 6);
f = h * 6 - i;
p = v * (1 - s);
q = v * (1 - f * s);
t = v * (1 - (1 - f) * s);
switch (i % 6) {
    case 0: r = v, g = t, b = p; break;
    case 1: r = q, g = v, b = p; break;
    case 2: r = p, g = v, b = t; break;
    case 3: r = p, g = q, b = v; break;
    case 4: r = t, g = p, b = v; break;
    case 5: r = v, g = p, b = q; break;
}
r = Math.round(255*r);
g = Math.round(255*g);
b = Math.round(255*b);

var hex = ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).substr(1);
document.getElementsByTagName('footer')[0].style.backgroundColor = '#' + hex;

// the following gives the best text color (white or black)
// from the randomly generated background color by W3C contrast guidlines

var c = [r/255, g/255, b/255];
for (var i = 0; i < c.length; ++i ) {
    if ( c[i] <= 0.03928 ) {
        c[i] = c[i] / 12.92
    } else {
        c[i] = Math.pow( ( c[i] + 0.055 ) / 1.055, 2.4);
    }
}

var l = 0.2126 * c[0] + 0.7152 * c[1] + 0.0722 * c[2];

if ( l > 0.179 ) {
    document.getElementById('footer-text').style.color = '#000'
} else {
    document.getElementById('footer-text').style.color = '#fff'
}

// Set Footer Text

document.getElementById("footer-text").innerHTML = "Copyright &copy; " + String(new Date().getFullYear()) + " Dylan Modesitt";


// Handle Logo Color Change

var heightOfSections = [];

var sections = document.getElementsByTagName("section");
for(var i = 0; i < sections.length; ++i){
    heightOfSections.push(sections[i].offsetTop);
}

var lastScrollTop = 0;
var lastSection = 0;
window.onscroll = function() {

    var st = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
    var scrollPos = (st > lastScrollTop) ? st + 64 : st;
    lastScrollTop = st;

    var section;

    for (var i = 0; i<heightOfSections.length; ++i) {
        if ((i === heightOfSections.length-1 && scrollPos >= heightOfSections[i]) ||
            scrollPos >= heightOfSections[i] && scrollPos < heightOfSections[i+1]) {
            section = i;
        }
    }

    if(section !== lastSection) {
        if(section % 2 === 1) {
            document.getElementById("logo").src="assets/img/logo-white.png";
        } else {
            document.getElementById("logo").src="assets/img/logo.png";
        }
        lastSection = section;
    }

};


