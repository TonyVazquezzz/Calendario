using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Sistema
{
    #region Eventos
    public class Eventos
    {
        #region Member Variables
        protected int _id;
        protected string _title;
        protected string _descripcion;
        protected string _color;
        protected string _textColor;
        protected DateTime _start;
        protected DateTime _endd;
        #endregion
        #region Constructors
        public Eventos() { }
        public Eventos(string title, string descripcion, string color, string textColor, DateTime start, DateTime endd)
        {
            this._title=title;
            this._descripcion=descripcion;
            this._color=color;
            this._textColor=textColor;
            this._start=start;
            this._endd=endd;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Title
        {
            get {return _title;}
            set {_title=value;}
        }
        public virtual string Descripcion
        {
            get {return _descripcion;}
            set {_descripcion=value;}
        }
        public virtual string Color
        {
            get {return _color;}
            set {_color=value;}
        }
        public virtual string TextColor
        {
            get {return _textColor;}
            set {_textColor=value;}
        }
        public virtual DateTime Start
        {
            get {return _start;}
            set {_start=value;}
        }
        public virtual DateTime Endd
        {
            get {return _endd;}
            set {_endd=value;}
        }
        #endregion
    }
    #endregion
}