"use strict";(self.webpackChunkhoney_theme=self.webpackChunkhoney_theme||[]).push([[938],{348:(e,t,s)=>{function n(e){let t=document.getElementById("searchInput"),s=document.querySelector(".added-to-cart-popup"),n=document.querySelector(".page-overlay");e.addEventListener("click",(s=>{if(console.log(e),s.target==s.currentTarget){s.currentTarget;e.classList.toggle("unfold"),n.classList.add("active"),t.focus()}})),t.addEventListener("input",(t=>{t.currentTarget.value.length>0?(e.classList.add("show-results"),n.classList.add("active")):(e.classList.remove("show-results"),n.classList.remove("active"))})),t.addEventListener("focusout",(()=>{e.classList.remove("show-results"),n.classList.remove("active")})),document.addEventListener("vanilla_added_to_cart",(()=>{n.classList.add("active"),s.classList.add("show"),document.querySelector(".add_to_cart_button").innerHTML="Kup jeszcze raz";let e=parseInt(document.getElementById("inMyCart").innerHTML);e++,document.getElementById("inMyCart").innerHTML=""+e})),document.addEventListener("vanilla_adding_to_cart",(()=>{document.querySelector(".add_to_cart_button").innerHTML="Dodaję produkt..."})),window.addEventListener("click",(t=>{e.contains(t.target)||(e.classList.remove("unfold"),s.classList.remove("show"),n.classList.remove("active"))})),document.querySelector(".continue-shopping").addEventListener("click",(e=>{e.preventDefault(),n.click()}))}s.r(t),s.d(t,{default:()=>n})}}]);