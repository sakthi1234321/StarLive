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
    public class Video: BaseEntityCommon
    {
        [Key]
        [DatabaseGenerated(DatabaseGeneratedOption.Identity)]
        public int VideoID { get; set; }
        public string Title { get; set; }
        public string Description { get; set; }
        public string Embedded { get; set; }
        public string URL { get; set; }
        public bool InviteFriend { get; set; }
        public int FK_CategoryID { get; set; }

        [ForeignKey("FK_CategoryID")]
        public VideoCategory VideoCategory { get; set; }

        public int FK_UserID { get; set; }

        [ForeignKey("FK_UserID")]
        public User User { get; set; }
    }
}
