using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace StarLive.DAL.Models
{
    public class UploadModel
    {
        public string URL { get; set; }
        public string Title { get; set; }
        public int Category { get; set; }
        public string Description { get; set; }
        public string Embedded { get; set; }
        public bool InviteFriend { get; set; }
        public int UserID { get; set; }
        public int VideoID { get; set; }
    }
}
