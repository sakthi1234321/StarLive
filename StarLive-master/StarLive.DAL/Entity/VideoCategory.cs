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
    public class VideoCategory
    {
        [Key]
        public int CategoryID { get; set; }
        public string CategoryName { get; set; }

        public ICollection<Video> Videos { get; set; }
    }
}
