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
    public class UserType : BaseEntityCommon
    {
        [Key]
        [DatabaseGenerated(DatabaseGeneratedOption.Identity)]
        public int UserTypeID { get; set; }
        public string UserTypeName { get; set; }

        public ICollection<User> Users { get; set; }
    }
}
