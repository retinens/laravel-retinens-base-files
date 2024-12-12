/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import * as bootstrap from 'bootstrap'

window.bootstrap = bootstrap
import * as popper from '@popperjs/core'

window.Popper = popper
import * as jquery from 'jquery'
import * as lodash from 'lodash'

import jQuery from "jquery";
import $ from 'jquery';
window.jQuery = jQuery
window.$ = $

window._ = lodash
import axios from 'axios'

window.axios = axios
//set axios default headers

import "./volt"

import * as toastr from 'toastr';
window.toastr = toastr;

import Choices from 'choices.js'
window.Choices = Choices

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.choices').forEach((select) => {
        new Choices(select)
    })
})


import DataTable from "datatables.net-bs5";
window.DataTable = DataTable;

$('.dataTable').dataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
    }
});

window.moment = import('moment');


$(document).ready(function () {
    window.livewire.on('toastr', param => {
        toastr[param['type']](param['message'], param['title'])
    });
})

import Alpine from 'alpinejs'
Alpine.start()
window.Alpine = Alpine
import Trix from "trix"
Trix.config.textAttributes.sup = { tagName: "sup", inheritable: true }
Trix.config.textAttributes.sub = { tagName: "sub", inheritable: true }
document.addEventListener("trix-initialize", function(event) {
    var element = event.target
    var editor = element.editor
    var toolbarElement = element.toolbarElement
    var groupElement = toolbarElement.querySelector(".trix-button-group.trix-button-group--text-tools")

    groupElement.insertAdjacentHTML("beforeend", '<button type="button" class="trix-button" data-trix-attribute="sup"><sup>EXP</sup></button>')
    groupElement.insertAdjacentHTML("beforeend",'<button type="button" class="trix-button" data-trix-attribute="sub"><sub>IND</sub></button>')
})

import lozad from 'lozad'
const observer = lozad();
observer.observe();
