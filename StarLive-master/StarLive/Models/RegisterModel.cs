using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace StarLive.Models
{
    public class RegisterModel
    {
        public string UserName { get; set; }

        public string Password { get; set; }

        public string EmailAddress { get; set; }

        public long MobileNumber { get; set; }

        public int UserTypeID { get; set; }

        public string ParentName { get; set; }
    }
}