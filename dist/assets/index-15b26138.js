const o=document.getElementById("carousel"),d=document.getElementById("right-btn"),m=document.getElementById("left-btn");let a=["/images/product_example_copia.jpg","/images/product_example4.png","/images/png_webshop_juventus.png"];o.src=a[0];let l=0;const u=()=>{if(l>=a.length-1){l=0,o.src=a[l];return}o.src=a[l+1],l++},g=()=>{if(l<1){l=a.length-1,o.src=a[l];return}o.src=a[l-1],l--};d.addEventListener("click",u);m.addEventListener("click",g);f("all");function f(n){var s,e;for(s=document.getElementsByClassName("product-container"),n=="all"&&(n=""),e=0;e<s.length;e++)v(s[e],"show"),s[e].className.indexOf(n)>-1&&p(s[e],"show")}function p(n,s){var e,t,c;for(t=n.className.split(" "),c=s.split(" "),e=0;e<c.length;e++)t.indexOf(c[e])==-1&&(n.className+=" "+c[e])}function v(n,s){var e,t,c;for(t=n.className.split(" "),c=s.split(" "),e=0;e<c.length;e++)for(;t.indexOf(c[e])>-1;)t.splice(t.indexOf(c[e]),1);n.className=t.join(" ")}var h=document.getElementById("filter-buttons"),i=h.getElementsByClassName("button-value");for(var r=0;r<i.length;r++)i[r].addEventListener("click",function(){var n=document.getElementsByClassName("active");n[0].className=n[0].className.replace(" active",""),this.className+=" active"});document.querySelector(".button-value").onclick=function(n){document.querySelectorAll(".1").forEach(function(t){t.classList.remove("red")}),n.target.classList.add("red");const s=n.target.classList[0];console.log(s);const e=docment.querySelector("#grid").childeren;for(let t=0;t<e.length;t++)e[t].style.display="none";document.querySelectorAll(`.${s}`).forEach(function(t){t.style.display="block"})};
