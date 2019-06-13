using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Usuariosreg
{
    #region Usu
    public class Usu
    {
        #region Member Variables
        protected string _Nombre;
        protected string _Correo;
        protected string _Contrasena;
        #endregion
        #region Constructors
        public Usu() { }
        public Usu(string Nombre, string Correo, string Contrasena)
        {
            this._Nombre=Nombre;
            this._Correo=Correo;
            this._Contrasena=Contrasena;
        }
        #endregion
        #region Public Properties
        public virtual string Nombre
        {
            get {return _Nombre;}
            set {_Nombre=value;}
        }
        public virtual string Correo
        {
            get {return _Correo;}
            set {_Correo=value;}
        }
        public virtual string Contrasena
        {
            get {return _Contrasena;}
            set {_Contrasena=value;}
        }
        #endregion
    }
    #endregion
}