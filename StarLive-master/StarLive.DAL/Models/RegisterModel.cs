using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace StarLive.DAL.Models
{
    public class RegisterModel
    {
        public string UserName { get; set; }

        public string Password { get; set; }

        public string EmailAddress { get; set; }

        public int MobileNumber { get; set; }

        public int UserTypeID { get; set; }
    }
}