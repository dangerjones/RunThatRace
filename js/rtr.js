/*global document:false, window:false, $:false */
(function (w) {
	"use strict";

	// create a namespace and expose that namespace on the global object
	var RTR = {};
	w.RTR = RTR;
	RTR.Util = {};
	RTR.Constants = {};
	RTR.Class = {};
	RTR.Instances = {};

	// create the base object and put everything on the prototype to
	// avoid duplication
	RTR.Class.Base = function () {
		var that = this;

		that.containerId = '';
		that.container = null;

		that.init = RTR.Class.Base.prototype.init;
		that.getById = RTR.Class.Base.prototype.getById;
		that.setSettingsByObject = RTR.Class.Base.prototype.setSettingsByObject;
		that.setVars = RTR.Class.Base.prototype.setVars;
		that.addEvents = RTR.Class.Base.prototype.addEvents;

		return that;
	};

	RTR.Class.Base.prototype.init = function (json) {
		this.setSettingsByObject(json);
		this.setVars();
		this.addEvents();
	};

	RTR.Class.Base.prototype.setSettingsByObject = function (json) {
		var propName = '';
		for (propName in json) {
			if (json.hasOwnProperty(propName)) {
				if (this[propName] !== undefined) {
					this[propName] = json[propName];
				}
			}
		}
	};

	RTR.Class.Base.prototype.setVars = function () {
		if (this.containerId) {
			this.container = this.getById(this.containerId);
		}
	};

	RTR.Class.Base.prototype.addEvents = function () {
	};

	RTR.Class.Base.prototype.getById = function (id) {
		var obj = null;
		if (id) {
			obj = $('#' + id);
		}

		if (obj) {
			return $(obj);
		}

		return $([]);
	};

	// Douglas Crockford's inheritance method
	RTR.Util.extendObject = function (obj) {
		var F = function () { };
		F.prototype = obj;

		return new F();
	};

	RTR.Util.readyObjects = [];
	RTR.Util.instances = [];

	RTR.Util.createObject = function (className, json) {
		var co = {
			'className': className,
			'json': json
		};

		RTR.Util.readyObjects.push(co);
	};

	RTR.Util.initObjects = function () {
		var o = null,
			ro = null,
			className = '',
			json = null,
			i = 0,
			len = 0;

		len = RTR.Util.readyObjects.length;

		for (i = 0; i < len; i += 1) {
			ro = RTR.Util.readyObjects[i];
			className = ro.className;
			json = ro.json;
			o = new RTR.Class[className]();

			o.init(json);

			RTR.Util.instances[className + '_' + i] = o;
		}
	};

	RTR.Util.ready = function () {
		RTR.Util.initObjects();
	};

	$(document).ready(function () {
		RTR.Util.ready();
	});

	RTR.Class.ParticipantsViewModel = function () {
		var parent = new RTR.Class.Base(),
			that = RTR.Util.extendObject(parent);

		that.participantTemplateId = 'participantTemplate';
		that.participantTemplate = null;

		that.selectParticipantsNumberId = 'participantsNumber';
		that.selectParticipants = null;

		that.participants = [];

		that.setVars = function () {
			parent.setVars.call(this);

			if (!this.participantTemplate) {
				this.participantTemplate = this.getById(this.participantTemplateId);
			}

			if (!this.selectParticipants) {
				this.selectParticipants = this.getById(this.selectParticipantsNumberId);
			}
		};

		that.addEvents = function () {
			parent.addEvents.call(this);

			this.selectParticipants.change($.proxy(this.numberParticipantsChanged, this));
		};

		that.numberParticipantsChanged = function () {
			var html = '', 
				snp = this.selectParticipants.val(),
				np = parseInt(snp, 10),
				p = null,
				i = 0;

			if (!this.container) {
				return;
			}

			// clear the html
			this.container.html('');

			// this the participants
			this.participants = [];

			for (i = 0; i < np; i += 1) {
				p = new RTR.Class.Participant();
				p.init({
					'participantIndex': i,
					'participantTemplate': this.participantTemplate
				});

				this.participants.push(p);
			}

			html = this.render();

			this.container.html(html);

		};

		that.render = function () {
			var s = '',
				i = 0,
				len = 0;

			len = this.participants.length;

			for (i = 0; i < len; i += 1) {
				s += this.participants[i].render();
			}

			return s;
		};

		return that;
	};

	RTR.Class.Participant = function () {
		var parent = new RTR.Class.Base(),
			that = RTR.Util.extendObject(parent);

		that.participantIndex = -1;
		that.firstname = '';
		that.lastname = '';
		that.email = '';
		that.gender = '';
		that.birthDateMonth = '';
		that.birthDateDay = '';
		that.birthDateYear = '';
		that.shirtSizeAdult = '';
		that.shirtSizeYouth = '';

		that.participantTemplateId = 'participantTemplate';
		that.participantTemplate = null;

		that.setVars = function () {
			parent.setVars.call(this);

			if (!this.participantTemplate) {
				this.participantTemplate = this.getById(this.participantTemplateId);
			}
		};

		that.render = function () {
			return this.participantTemplate.render(this);
		};

		return that;
	};

}(window));
