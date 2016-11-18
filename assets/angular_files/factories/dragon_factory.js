(function () {
  'use strict'

  angular
        .module('myApp')
        .factory('DragonFactory', factory)

  function factory ($http) {
    const factory = {}
    factory.index = function (callback) {
      $http.get('/dragons').success(function (dragons) {
        callback(dragons)
      })
    }
    factory.create = function (dragonInfo, callback) {
      console.log('in factory', dragonInfo)
      $http.post('/create', dragonInfo).success(function (data) {
        console.log(data)
        callback()
      })
    }
    factory.show = function (dragonId, callback) {
      $http.get('/show/' + dragonId).success(function (dragon) {
        console.log(dragon)
        callback(dragon)
      })
    }
    factory.update = function (dragonInfo, callback) {
      $http.post('/update/' + dragonInfo.id, dragonInfo).success(function (data) {
        console.log(data)
        callback()
      })
    }
    factory.delete = function (dragonId, callback) {
      $http.post('/delete/' + dragonId).success(function (data) {
        console.log(data)
        callback()
      })
    }
    return factory
  }
})()
