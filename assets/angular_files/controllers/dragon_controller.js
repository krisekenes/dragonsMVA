(function () {
  'use strict'

  angular
        .module('myApp')
        .controller('DragonController', Controller)

  function Controller (DragonFactory, $location, $routeParams) {
    if ($routeParams.dragon_id) {
      DragonFactory.show($routeParams.dragon_id, function (data) {
        self.dragon = data
      })
    }
    const self = this
    self.getDragons = function () {
      DragonFactory.index(function (data) {
        self.dragons = data
      })
    }
    self.createDragon = function () {
      DragonFactory.create(self.newDragon, function () {
        $location.url('/')
      })
    }
    self.editDragon = function () {
      DragonFactory.update(self.dragon, function () {
        console.log(self.dragon)
        $location.url('/dragons/show/' + self.dragon.id)
      })
    }
    self.deleteDragon = function (dragon_id) {
      DragonFactory.delete(dragon_id, function () {
        $location.url('/')
      })
    }
  }
})()
