class Cliente {
    constructor() {
      this.nombres = '';
      this.fechaNacimiento = null;
      this.cedula = '';
      this.confcedula = '';
      this.telefono = '';
      this.conftelefono = '';
      this.email = '';
      this.password = '';
      this.ciudad = 0;
      this.puntoVenta = 0;
      this.NIT = 0;
      this.genero = 'M';
      this.pais = location.search.split('pais=')[1]
      this.terminos = false
    }

  }