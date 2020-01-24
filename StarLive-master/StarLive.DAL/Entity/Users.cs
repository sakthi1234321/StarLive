using StarLive.DAL.Common;
using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace StarLive.DAL.Entity
{
    public class User: BaseEntityCommon
    {
        [Key]
        [DatabaseGenerated(DatabaseGeneratedOption.Identity)]
        public int UserID { get; set; }
        public string UserName { get; set; }
        public string ParentName { get; set; }
        public long MobileNumber { get; set; }
        public string Email { get; set; }
        public string Password { get; set; }
        public int FK_UserTypeID { get; set; }

        [ForeignKey("FK_UserTypeID")]
        public UserType UserType { get; set; }

        public ICollection<Video> Videos { get; set; }

    }
}
