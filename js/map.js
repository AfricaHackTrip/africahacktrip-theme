// L.LabelOverlay = L.Class.extend({
//     initialize: function(/*LatLng*/ latLng, /*String*/ label, options) {
//         this._latlng = latLng;
//         this._label = label;
//         L.Util.setOptions(this, options);
//     },
//     options: {
//         offset: new L.Point(0, 0)
//     },
//     onAdd: function(map) {
//         this._map = map;
//         if (!this._container) {
//             this._initLayout();
//         }
//         map.getPanes().overlayPane.appendChild(this._container);
//         this._container.innerHTML = this._label;
//         map.on('viewreset', this._reset, this);
//         this._reset();
//     },
//     onRemove: function(map) {
//         map.getPanes().overlayPane.removeChild(this._container);
//         map.off('viewreset', this._reset, this);
//     },
//     _reset: function() {
//         var pos = this._map.latLngToLayerPoint(this._latlng);
//         var op = new L.Point(pos.x + this.options.offset.x, pos.y - this.options.offset.y);
//         L.DomUtil.setPosition(this._container, op);
//     },
//     _initLayout: function() {
//         this._container = L.DomUtil.create('div', 'leaflet-label-overlay');
//     }
// });

window.Hackmap = {

  m: null,
  options: {},
  countries: {
    "kenya": {},
    "uganda": {},
    "rwanda": {},
    "tanzania": {}
  },
  cities: {
    nairobi: {
      country: "kenya",
      lat: -1.294903,
      lng: 36.824005,
      label: '09/24-10/01'
    },
    kampala: {
      country: "uganda",
      lat: 0.312079,
      lng: 32.581276,
      label: '10/02-10/08'
    },
    kigali: {
      country: "rwanda",
      lat: -1.952099,
      lng: 30.059570,
      label: '10/09-10/15'
    },
    daressalaam: {
      country: "tanzania",
      lat: -6.826216,
      lng: 39.269149,
      label: '10/16-10/23'
    }
  },

  initializeMap: function() {
    this.options.mobile = window.IS_VERY_SMALL_SCREEN;
    if(this.options.mobile) { return; }

    var self = this;
    L.Icon.Default.imagePath = "/images/leaflet";

    self.m = L.map('bigfatmap', {
      center: [-2.350415, 35.679931],
      zoom: 5,
      scrollWheelZoom: false,
      zoomControl: false,
      tap: true
    });
    self.m.addControl( L.control.zoom({position: 'bottomleft'}) );
    self.m.attributionControl.setPrefix('');

    L.tileLayer('https://{s}.tiles.mapbox.com/v3/aht.map-bo38swvz/{z}/{x}/{y}.png', {
      attribution: '',
      maxZoom: 17
    }).addTo(self.m);

    $.each(this.cities, function(cityName, city) {
      self.addCountryLabel(cityName, city);
    });
  },

  addMarkers: function(markers) {

  },

  moveToCity: function(cityName) {
    if(this.options.mobile) { return; }

    var city = this.cities[cityName];
    this.m.setView([city.lat, city.lng], 7, {animate: true});
  },

  moveToOverview: function() {
    if(this.options.mobile) { return; }

    this.m.setView([-3.50415, 20.679931], 5, {animate: true});
  },

  addCountryLabel: function(cityName) {
    if(this.options.mobile) { return; }

    var city = this.cities[cityName];
    L.marker([city.lat, city.lng])
      .bindLabel(city.label, { noHide: true })
      .addTo(this.m)
      .showLabel();
  },

  setHeight: function(value) {
    if(this.options.mobile) { return; }

    $('#bigfatmap').animate({height: value});
  },
};